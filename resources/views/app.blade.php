<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-59352699-6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-59352699-6', { 'anonymize_ip': true });
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="logged-in" content="{{ $loggedIn }}">
    <meta name="get-history" content="{{ $getHistory }}">
    <meta name="start-scenario" content="{{ $startScenario }}">
    <meta name="start-message" content="{{ $startMessage }}">
    <meta name="password-reset-token" content="{{ $passwordResetToken }}">

    <title>A Week With Wanda 🤖😬😂 A new AI game - the dark side of artifical intelligence... hilarious or horrifying?!</title>

    <meta name="title" content="A Week With Wanda 🤖😬😂 A new AI game - the dark side of artifical intelligence">
    <meta name="description" content="Let virtual assistant Wanda 'improve' your life for a week to see the hilarious -- and sometimes horrifying -- results!">
    <link rel="canonical" href="{{ env('APP_URL') }}" />

    <meta name="twitter:title" content="A Week With Wanda 🤖😬😂 A game about AI's dark side">
    <meta name="twitter:description" content="Let virtual assistant Wanda 'improve' your life for a week to see the hilarious -- and sometimes horrifying -- results!">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@weekwithwanda">
    <meta name="twitter:creator" content="@joefhall">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="A Week With Wanda 🤖😬😂 A game about the dark side of AI... let virtual assistant Wanda 'improve' your life!" />
    <meta property="og:description" content="Spend 7 days with Wanda to see the hilarious -- and sometimes horrifying -- results!">
    
    @if ($share)
      <meta name="twitter:image" content="{{ env('APP_URL') }}/img/share/{{$share}}.png" />
      <meta property="og:url" content="{{ env('APP_URL') }}/?share={{$share}}" />
      <meta property="og:image" content="{{ env('APP_URL') }}/img/share/{{$share}}.png" />
      <meta property="og:image:width" content="800" />
      <meta property="og:image:height" content="400" />
    @else
      <meta name="twitter:image" content="{{ env('APP_URL') }}/img/share/main.png">
      <meta property="og:url" content="{{ env('APP_URL') }}" />
      <meta property="og:image" content="{{ env('APP_URL') }}/img/share/main.png" />
      <meta property="og:image:width" content="484" />
      <meta property="og:image:height" content="262" />
    @endif
    
    <meta property="fb:app_id" content="603526126776384" />

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

    <div id="root">
    </div>

    <script src="{{ mix('/js/index.js') }}"></script>
  </body>
  
</html>