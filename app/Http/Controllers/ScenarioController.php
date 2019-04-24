<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScenarioController extends Controller
{ 
  /**
   * Show a list of all the scenarios.
   *
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index(Request $request)
  {
    $scenarios = config('scenarios');

    $categories = [];
    foreach ($scenarios as $scenario) {
      if (array_has($scenario, 'category') && !in_array($scenario['category'], $categories)) {
        $categories[] = $scenario['category'];
      }
    }
    sort($categories);
    
    return view('scenarios.index', compact('scenarios', 'categories'));
  }
  
  /**
   * Show the chat structure that makes up a particular scenario.
   *
   * @param Request $request
   * @param string $scenarioId
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function show(Request $request, string $scenarioId)
  {
    $scenario = config("scenarios.{$scenarioId}");

    $nodeList = $this->getNodeList($scenarioId, $scenario);
    $nodeListByDepth = $this->orderByDepth($nodeList);
    $orphaned = $this->orphaned($scenario, $nodeList);
    
    return view('scenarios.show', compact(
      'scenarioId',
      'scenario',
      'nodeList',
      'nodeListByDepth',
      'orphaned'
    ));
  }
  
  private function getNodeList(string $scenarioId, array $scenario) {
    $nodeList = [];
    $nodeList[] = $this->getFirstNode($scenarioId, $scenario);

    while(!is_null($current = $this->firstIncomplete($nodeList))) {
      $nodeList = $this->addChildren($scenarioId, $scenario, $nodeList, $current);
      $nodeList = $this->crawlChildren($scenarioId, $scenario, $nodeList, $current);
    }
    
    return $nodeList;
  }
  
  private function getFirstNode(string $scenarioId, array $scenario) {
    $firstNode = [
      'depth' => 0,
    ];
    
    $firstWandaNodeId = array_keys($scenario['wanda'])[0];
    $firstWandaNode = $scenario['wanda'][$firstWandaNodeId];
    $firstUserNodeId = array_keys($scenario['user'])[0];
    $firstUserNode = $scenario['user'][$firstUserNodeId];
    
    if (in_array($firstUserNodeId, $firstWandaNode['user'])) {
      $firstNode['who'] = 'wanda';
      $firstNode['name'] = $firstWandaNodeId;
    } else {
      $firstNode['who'] = 'user';
      $firstNode['name'] = $firstUserNodeId;
    }
    
    return $firstNode;
  }
  
  private function opposite($who) {
    return $who === 'wanda' ? 'user' : 'wanda';
  }

  private function crawled($nodeList, $name, $who) {
    foreach ($nodeList as $key => $node) {
      if ($node['name'] === $name && $node['who'] === $who) {
        return true;
      }
    }
    
    return false;
  }

  private function firstIncomplete($nodeList) {
    foreach ($nodeList as $index => $node) {
      if (!array_has($node, 'children') || !array_has($node, 'depth')) {
        return $index;
      }
    }
    
    return null;
  }

  private function maxDepth($nodeList) {
    $maxDepth = 0;
    
    foreach ($nodeList as $index => $node) {
      if (array_has($node, 'depth') && $node['depth'] > $maxDepth) {
        $maxDepth = $node['depth'];
      }
    }
    
    return $maxDepth;
  }

  private function addChildren($scenarioId, $scenario, $nodeList, $current) {
    if (array_has($scenario[$nodeList[$current]['who']], $nodeList[$current]['name'])) {
      if (array_has($scenario[$nodeList[$current]['who']][$nodeList[$current]['name']], $this->opposite($nodeList[$current]['who']))) {
        if (
          is_array($scenario[$nodeList[$current]['who']][$nodeList[$current]['name']][$this->opposite($nodeList[$current]['who'])]) &&
          array_has($scenario[$nodeList[$current]['who']][$nodeList[$current]['name']][$this->opposite($nodeList[$current]['who'])], 'validate')
        ) {
          $validationChildren = [];
          foreach($scenario[$nodeList[$current]['who']][$nodeList[$current]['name']][$this->opposite($nodeList[$current]['who'])]['validate']['responses'] as $response) {
            $validationChildren[] = $response;
          }
          $nodeList[$current]['children'] = $validationChildren;
        } else if (!array_has($scenario[$nodeList[$current]['who']][$nodeList[$current]['name']], 'scenario') || $scenario[$nodeList[$current]['who']][$nodeList[$current]['name']]['scenario'] === $scenarioId) {
          $nodeList[$current]['children'] = $scenario[$nodeList[$current]['who']][$nodeList[$current]['name']][$this->opposite($nodeList[$current]['who'])] ?? null;
        } else {
          $nodeList[$current]['children'] = null;
        }
      }
    } else {
      $nodeList[$current]['children'] = null;
    }

    if (gettype($nodeList[$current]['children']) === 'string') {
      $nodeList[$current]['children'] = [$nodeList[$current]['children']];
    }

    return $nodeList;
  }

  private function crawlChildren($scenarioId, $scenario, $nodeList, $current) {
    if ($nodeList[$current]['children']) {
      foreach ($nodeList[$current]['children'] as $child) {
        if (!$this->crawled($nodeList, $child, $this->opposite($nodeList[$current]['who']))) {
          $nodeList[] = [
            'name' => $child,
            'who' => $this->opposite($nodeList[$current]['who']),
            'depth' => $nodeList[$current]['depth'] + 1,
            'type' => array_has($scenario[$this->opposite($nodeList[$current]['who'])], $child) ?
              array_get($scenario[$this->opposite($nodeList[$current]['who'])][$child], 'type', null) : null,
            'emotion' => array_has($scenario[$this->opposite($nodeList[$current]['who'])], $child) ?
              array_get($scenario[$this->opposite($nodeList[$current]['who'])][$child], 'emotion', null) : null,
          ];
        }
      }
    }
    
    return $nodeList;
  }

  private function orphaned($scenario, $nodeList) {
    $orphaned = [];
    
    foreach (array_keys($scenario['wanda']) as $wanda) {
      if (!$this->crawled($nodeList, $wanda, 'wanda')) {
        $orphaned[] = 'wanda - ' . $wanda;
      }
    }
    foreach (array_keys($scenario['user']) as $user) {
      if (!$this->crawled($nodeList, $user, 'user')) {
        $orphaned[] = 'user - ' . $user;
      }
    }
    
    return $orphaned;
  }

  private function orderByDepth($nodeList) {
    $maxDepth = $this->maxDepth($nodeList);
    $nodeListByDepth = [];
    
    for ($depth = 0; $depth <= $maxDepth; $depth++) {
      foreach ($nodeList as $node) {
        if ($node['depth'] === $depth) {
          $nodeListByDepth[$depth][] = $node;
        }
      }
    }
    
    return $nodeListByDepth;
  }
}
