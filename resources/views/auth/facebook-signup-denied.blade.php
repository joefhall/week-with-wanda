<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
      A Week With Wanda - Facebook signup
    </title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" />
  </head>
  
  <body>
    <h1>
      Oh dear!
    </h1>
    <p>
      You didn't give me permission to sign you up with Facebook, so that didn't work.
    </p>
    <p>
      Would you like to try signing up again? You can do it without Facebook this time.
    </p>
    <p>
      <a class="btn btn-primary" href="{{ route('app') }}">
        Let's go
      </a>
    </p>
  </body>
  
</html>