<html>
  
  <head>
    <title>A Week With Wanda - Emotions</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" />
    <style>
      .emotion-image {
        height: 141px;
        width: 250px;
      }
    </style>
  </head>

  <body>
    <div style="margin: 0 0 0 10px;">
      @foreach ($emotions as $emotion)
        <div style="display: inline-block; float: left; margin: 10px; filter: brightness(115%) saturate(140%);">
          <h3>
            {{ $emotion }}
          </h3>

          <div style="margin-bottom: 20px;">
            <img class="emotion-image" data-emotion="{{ $emotion }}" src="/img/emotions/{{ $emotion }}.gif" alt="Wanda {{ $emotion }}" onMouseOver="this.src = ''; this.src = `/img/emotions/${this.dataset.emotion}.gif`;" />
          </div>
        </div>
      @endforeach
    </div>
  </body>
</html>
  