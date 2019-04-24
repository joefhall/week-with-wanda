<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
      A Week With Wanda - Verify 
      @if ($matchedToken)
        your {{ str_replace('_', ' ', $type) }}
      @endif
    </title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" />
  </head>
  
  <body>    
    @if ($matchedToken && $isValid)
      <h1>
        Thanks!
      </h1>
      <p>
        Your {{ str_replace('_', ' ', $type) }} is verified now.  
      </p>
      <p>
        You can close this window now and go back to the chat.
      </p>
    @elseif (!$matchedToken)
      <h1>
        Boooo!
      </h1>
      <p>
        I couldn't find anything at this link.
      </p>
      <p>
        Sorry!
      </p>
    @elseif ($matchedToken && !$isValid)
      <h1>
        Boooo!
      </h1>
      <p>
        Unfortunately this link is out of date.
      </p>
      <p>
        Request another one [TODO: add link]
      </p>
    @endif
    
    <p style="color: darkslategray; font-style: italic;">
      [This page will be removed and email verification will just be part of the chat]
    </p>
  </body>
  
</html>