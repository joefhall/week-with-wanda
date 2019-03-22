<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>A Week With Wanda - Scenarios - {{ $scenario['category'] }} - {{ $scenarioId }}</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" />
  </head>
  
  <body>
    
    <div class="jumbotron" style="background-color: palegreen;">
      <h1 class="display-4">Scenarios</h1>
      <h2><span class="text-secondary">{{ $scenario['category'] }} ></span> {{ $scenarioId }}</h2>
      <hr class="my-4">
      
      <div id="tree-holder" class="d-flex" style="flex-direction: column;"> 
      
        @foreach ($nodeListByDepth as $depth)
          <div class="d-flex mb-4" style="justify-content: space-around;">

            @foreach ($depth as $node)
              <div id="{{ $node['who'] . '-' . $node['name'] }}" data-who="{{ $node['who'] }}" data-name="{{ $node['name'] }}">
                {{ $node['name'] }}
              </div>
            @endforeach

          </div>
        @endforeach

      </div>
    </div>
    
    <script>
      function cumulativeOffset(element) {
        var top = 0, left = 0;
        do {
          top += element.offsetTop  || 0;
          left += element.offsetLeft || 0;
          element = element.offsetParent;
        } while(element);

        return {
          top: top,
          left: left
        };
      };
    </script>

  </body>
  
</html>