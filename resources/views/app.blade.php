<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="logged-in" content="{{ $loggedIn }}">
    <meta name="start-scenario" content="{{ $startScenario }}">
    <meta name="start-message" content="{{ $startMessage }}">

    <title>A Week With Wanda</title>

    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" />
  </head>
  
  <body>
    <div id="preview-notice" style="position: absolute; z-index: 10000; width: 100vw; height: 100vh; padding-top: 150px; background-color: darkviolet; color: white; text-align: center;">
      <h1>A Week With Wanda</h1>
      <p>This site is available for selected people to preview only.</p>
      <p>Do you have a preview code?</p>
      <form id="preview-form" onSubmit="enterPreviewCode(event)">
        <input id="preview-code" type="text" placeholder="Enter preview code" />
        <button id="preview-button" onClick="enterPreviewCode(event)">Enter</button>
        <div id="preview-error-message" class="d-none">
          Sorry, that's not right
        </div>
      </form>
    </div>
    <script>
      if (
        document.head.querySelector('meta[name="logged-in"]').content === 'true' ||
        document.head.querySelector('meta[name="start-scenario"]').content === 'login' ||
        document.head.querySelector('meta[name="start-scenario"]').content === 'loginFacebook' ||
        document.head.querySelector('meta[name="start-scenario"]').content === 'loginFailed'
      ) {
        document.querySelector('#preview-notice').classList.add('d-none');
      }
      
      function enterPreviewCode(event) {
        event.preventDefault();

        var previewNotice = document.querySelector('#preview-notice');
        var previewCodeInput = document.querySelector('#preview-code');
        var previewErrorMessage = document.querySelector('#preview-error-message');

        if (previewCodeInput.value.toLowerCase() === 'alive') {
          previewNotice.classList.add('d-none');
          previewCodeInput.blur();
        } else {
          previewErrorMessage.classList.add('d-block');
        }
      }
    </script>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">

      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
  </div>
    
    <div id="root">
    </div>

    <script src="{{ mix('/js/index.js') }}"></script>
  </body>
  
</html>