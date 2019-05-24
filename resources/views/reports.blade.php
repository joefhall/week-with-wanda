<html>
  
  <head>
    <title>A Week With Wanda - Reports</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" />
    <style>
      html,
      body {
        position: static;
        overflow: visible;
      }
    </style>
  </head>

  <body>

    <div class="container">
      <div class="row">
        <div class="col">

          <h1>
            Reports
          </h1>

          <h2>
            Total registered users
          </h2>
          <p>
            {{ $usersRegisteredTotal }}
          </p>

          <h2>
            Registered users by day
          </h2>
          <table class="table">
            <tr>
             <th>Day</th>
             <th>Total users</th>
           </tr>
            @foreach($usersByDay as $day => $dayUsers)
              <tr>
                <td>
                  {{ $day }}
                </td>
                <td>
                  {{ $dayUsers }}
                </td>
              </tr>
            @endforeach
          </table>

          <h2>
            Users by country
          </h2>
          <table class="table">
            <tr>
             <th>Country</th>
             <th>Total users</th>
             <th>Users receiving text messages</th>
           </tr>
            @foreach($countryTotals as $country => $countryData)
              <tr>
                <td>
                  {{ $country }}
                </td>
                <td>
                  {{ $countryData['total'] }}
                </td>
                <td>
                  {{ $countryData['textMessages'] }}
                </td>
              </tr>
            @endforeach
          </table>
        
        </div>
      </div>  
    </div>
    
  </body>
</html>
  