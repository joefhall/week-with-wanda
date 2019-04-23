<html>
  
  <head>
    <title>A Week With Wanda - Emotions</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" />
    <style>
      .emotion-image {
        height: 225px;
        width: 400px;
      }
    </style>
  </head>

  <body>
    <div style="margin: 30px 0 0 40px;">
      @foreach ($emotions as $emotion)
        <div style="display: inline-block; float: left; margin: 20px; filter: brightness(115%) saturate(140%);">
          <h3>
            {{ $emotion }}
          </h3>

          <div style="margin-bottom: 30px;">
            <img data-emotion="{{ $emotion }}" src="/img/emotions/{{ $emotion }}.gif" alt="Wanda {{ $emotion }}" onMouseOver="this.src = ''; this.src = `/img/emotions/${this.dataset.emotion}.gif`;" />
          </div>
        </div>
      @endforeach
    </div>
  </body>
</html>
  