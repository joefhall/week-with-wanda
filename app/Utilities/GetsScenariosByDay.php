<?php

namespace App\Utilities;

trait GetsScenariosByDay
{
  /**
   * Gets the health/wealth/relationships scenarios in
   * an easy to use array ordered by day then category.
   *
   * @return array
   */
  public function getCategoryScenariosByDay()
  {
    $allScenarios = collect(config('scenarios'));
    
    $categoryScenarios = $allScenarios->filter(function ($scenario, $id) {
      return in_array(array_get($scenario, 'category'), ['health', 'wealth', 'relationships']);
    });
    
    $categoryScenariosByDay = [];
    
    for ($day = 1; $day <= 6; $day++) {
      $categoryScenarios->each(function ($scenario, $id) use (&$categoryScenariosByDay, $day) {
        if ($scenario['day'] === $day) {
          $categoryScenariosByDay[$day][$scenario['category']] = $id;
        }
      });
    }

    return $categoryScenariosByDay;
  }
}
