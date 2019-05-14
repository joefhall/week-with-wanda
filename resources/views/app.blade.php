<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="logged-in" content="{{ $loggedIn }}">
    <meta name="get-history" content="{{ $getHistory }}">
    <meta name="start-scenario" content="{{ $startScenario }}">
    <meta name="start-message" content="{{ $startMessage }}">
    <meta name="password-reset-token" content="{{ $passwordResetToken }}">

    <title>A Week With Wanda</title>

    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" />
    
    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
  
  <body>
    <div id="preview-notice" style="position: absolute; z-index: 10000; width: 100vw; height: 100vh; padding: 150px 30px 0; background-color: darkviolet; color: white; text-align: center;">
      <h1 style="font-family: 'Pacifico', 'Arial', sans-serif;">A Week With Wanda</h1>
      <p>The game is currently available for selected people to preview only.</p>
      <p>Do you have a preview code?</p>
      <form id="preview-form" onSubmit="enterPreviewCode(event)">
        <input id="preview-code" type="text" placeholder="Enter preview code" style="padding: 5px; height: 40px;" />
        <button class="btn" style="background-color: gold; margin-left: 5px; height: 40px;" id="preview-button" onClick="enterPreviewCode(event)">Go</button>
        <div id="preview-error-message" class="d-none">
          Sorry, that's not right
        </div>
      </form>
    </div>
    <script>
      var authNotRequired = [
        @foreach($authNotRequired as $scenarioId => $notRequired)
          @if($notRequired)
            '{{ $scenarioId }}',
          @endif
        @endforeach
      ];
      var welcomeSignupIndex = authNotRequired.indexOf('welcomeSignup');
      authNotRequired.splice(welcomeSignupIndex, 1);

      if (
        document.head.querySelector('meta[name="logged-in"]').content === 'true' ||
        authNotRequired.indexOf(document.head.querySelector('meta[name="start-scenario"]').content) > -1 ||
        window.location.href.indexOf('verify') > -1
      ) {
        document.querySelector('#preview-notice').classList.add('d-none');
      }
      
      function enterPreviewCode(event) {
        event.preventDefault();

        var previewNotice = document.querySelector('#preview-notice');
        var previewCodeInput = document.querySelector('#preview-code');
        var previewErrorMessage = document.querySelector('#preview-error-message');

        if (previewCodeInput.value.toLowerCase().trim() === 'alive') {
          previewNotice.classList.add('d-none');
          previewCodeInput.blur();
        } else {
          previewErrorMessage.classList.add('d-block');
        }
      }
    </script>
    
    <div id="root">
    </div>

    <script src="{{ mix('/js/index.js') }}"></script>
  </body>
  
</html>