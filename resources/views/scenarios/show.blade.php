<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>A Week With Wanda - Scenarios - {{ $scenario['category'] }} - {{ $scenarioId }}</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" />
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  </head>
  
  <body>
    
    <div class="jumbotron">
      <h1 class="display-4"><a href="{{ route('scenarios') }}">Scenarios</a></h1>
      <h2><span class="text-secondary">{{ $scenario['category'] }} ></span> {{ $scenarioId }}</h2>
      <hr class="my-4">
      
      <div class="scenarios__tree"> 
      
        @foreach ($nodeListByDepth as $depth)
          <div class="scenarios__level">

            @foreach ($depth as $node)
              <div
                   id="{{ $node['who'] . '-' . $node['name'] }}"
                   class="scenarios__node scenarios__node--{{ $node['who'] }}"
                   data-who="{{ $node['who'] }}"
                   data-name="{{ $node['name'] }}"
                   data-children="{{ array_has($node, 'children') && $node['children'] ? implode(',', $node['children']) : '' }}"
                   data-type="{{ array_get($node, 'type', '') }}"
              >
                <div class="scenarios__node__name">
                  {{ $node['name'] }}
                </div>
                @if (array_has($node, 'type'))
                  <div class="scenarios__node__type">
                    {{ $node['type'] }}
                  </div>
                @endif
                @if (strpos(__("chats/{$scenarioId}.{$node['who']}.{$node['name']}"), 'chats/') === false)
                  <div class="scenarios__node__message">
                    {!! html_entity_decode(__("chats/{$scenarioId}.{$node['who']}.{$node['name']}")) !!}
                  </div>
                @endif
                @if (array_get($node, 'emotion'))
                  <div class="scenarios__node__emotion">
                    {{ $node['emotion'] }}
                  </div>
                @endif
              </div>
            @endforeach

          </div>
        @endforeach

      </div>
      
      @if ($orphaned)
        <div class="scenarios__orphaned">
          <h3>
            Orphaned
          </h3>
          @foreach ($orphaned as $orphan)
            <p>
              {{ $orphan }}
            </p>
          @endforeach
        </div>
      @endif
    </div>

    <svg class="scenarios__connectors" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <defs>
        <marker id="arrow" class="scenarios__connectors__connector__arrow" markerWidth="10" markerHeight="10" refX="0" refY="3" orient="auto" markerUnits="strokeWidth">
          <path d="M0,0 L0,6 L9,3 z" />
        </marker>
      </defs>
    </svg>
    
    <script>      
      function opposite(who) {
        return who === 'wanda' ? 'user' : 'wanda';
      }
      
      $(document).ready(function() {
        $('.scenarios__connectors').height($('body').height());
        
        $('.scenarios__node').each(function(index) {
          var node = $(this);
          var who = $(this).data('who');
          var name = $(this).data('name');
          var children = $(this).data('children').split(',');
          console.log(who, name);

          if (children) {
            $.each(children, function(index, child) {
              console.log(child);
              console.log($('#line-' + name + '-' + child));
              console.log(node);
              var childNode = $('#' + opposite(who) + '-' + child);
              if (childNode.length) {
                var line = document.createElementNS("http://www.w3.org/2000/svg", 'line');
                line.setAttributeNS(null, 'id', 'line-' + name + '-' + child);
                line.setAttributeNS(null, 'class', 'scenarios__connectors__connector scenarios__connectors__connector--' + who);
                
                var nodeHorizontalMiddle = node.position().left + node.outerWidth()/2;
                var nodeVerticalBottom = node.position().top + node.outerHeight();
                line.setAttributeNS(null, 'x1', nodeHorizontalMiddle);
                line.setAttributeNS(null, 'y1', nodeVerticalBottom);
                
                var childNodeHorizontalMiddle = childNode.position().left + childNode.outerWidth()/2;
                var childNodeVerticalTop = childNode.position().top;
                var endArrowHorizontalOffset = Math.abs(childNodeHorizontalMiddle - nodeHorizontalMiddle) < 15 ? 0 : (childNodeHorizontalMiddle < nodeHorizontalMiddle ? 15 : -15);
                var endArrowVerticalOffset = childNodeVerticalTop < nodeVerticalBottom ? 15 : -3;
                line.setAttributeNS(null, 'x2', childNodeHorizontalMiddle + endArrowHorizontalOffset);
                line.setAttributeNS(null, 'y2', childNodeVerticalTop + endArrowVerticalOffset);
                
                line.setAttributeNS(null, 'marker-end', 'url(#arrow)');
                
                document.querySelector('.scenarios__connectors').appendChild(line);
              }
            });
          }
        });
      });
    </script>

  </body>
  
</html>