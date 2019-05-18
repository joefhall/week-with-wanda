<html>
  
  <head>
    <title>A Week With Wanda - Reports</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" />
  </head>

  <body>
    
    <div class="container">
      <div class="row">
        
        <h1>
          Reports
        </h1>

        <table class="table">
          <tr>
           <th>Country</th>
           <th>Users receiving text messages</th>
         </tr>
          @foreach($countryTotals as $country => $countryData)
            <tr>
              <td>
                {{ $country }}
              </td>
              <td>
                {{ $countryData['textMessages'] }}
              </td>
            </tr>
          @endforeach
        </table>
        
      </div>  
    </div>
    
  </body>
</html>
  