<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>A Week With Wanda - Scenarios</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" />
  </head>
  
  <body>
    
    <div class="jumbotron">
      <h1 class="display-4">Scenarios</h1>
      <p class="lead">See all the different scenarios Wanda might present you with and the chat decision trees.</p>
      <hr class="my-4">
      @foreach ($categories as $category)
        <h3>
          {{ $category }}
        </h3>
        <ul class="list-group mb-4">
          @foreach (array_keys($scenarios) as $scenarioId)
            @if (array_has($scenarios[$scenarioId], 'category') && $scenarios[$scenarioId]['category'] === $category)
              <li class="list-group-item" style="order: {{ $scenarios[$scenarioId]['day'] }}">
                <a class="text-success" href="/scenarios/{{ $scenarioId }}">{{ __("chats/$scenarioId.description") }}</a> - {{ $scenarioId }} - <span class="text-secondary">day {{ $scenarios[$scenarioId]['day'] }}</span>
              </li>
            @endif
          @endforeach
        </ul>
      @endforeach
    </div>

  </body>
  
</html>