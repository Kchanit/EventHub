@extends('layouts.main')

@section('content')
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #347cf4;
  color: white;
}

</style>

<table id="customers">
<div class="flex flex-row pl-5 items-center mr-auto">
                <div class="h-9 w-9 app-bg-blue-2 flex justify-center items-center rounded-xl">
                    <svg class="w-6 h-6 app-color-blue-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
 
<p>Date: <input type="text" id="datepicker"></p>
 
 
</body>
                
</div>

  <div class="space-y-2">
    <tr>
      <th>Time</th>
      <th>Event</th>
    </tr>
    <tr>
      <td>00:00 - 01:00</td>
      <td></td>
    </tr>
    <tr>
      <td>01:00 - 02:00</td>
      <td></td>
    </tr>
    <tr>
      <td>02:00 - 03:00</td>
      <td></td>
    </tr>
    <tr>
      <td>03:00 - 04:00</td>
      <td></td>
    </tr>
    <tr>
      <td>04:00 - 05:00</td>
      <td></td>
    </tr>
    <tr>
      <td>05:00 - 06:00</td>
      <td></td>
    </tr>
    <tr>
      <td>06:00 - 07:00</td>
      <td></td>
    </tr>
    <tr>
      <td>07:00 - 08:00</td>
      <td></td>
    </tr>
    <tr>
      <td>08:00 - 09:00</td>
      <td></td>
    </tr>
    <tr>
      <td>09:00 - 10:00</td>
      <td></td>
    </tr>
    <tr>
      <td>10:00 - 11:00</td>
      <td></td>
    </tr>
    <tr>
      <td>11:00 - 12:00</td>
      <td></td>
    </tr>
    <tr>
      <td>12:00 - 13:00</td>
      <td></td>
    </tr>
    <tr>
      <td>13:00 - 14:00</td>
      <td></td>
    </tr>
    <tr>
      <td>14:00 - 15:00</td>
      <td></td>
    </tr>
    <tr>
      <td>15:00 - 16:00</td>
      <td></td>
    </tr>
    <tr>
      <td>16:00 - 17:00</td>
      <td></td>
    </tr>
    <tr>
      <td>17:00 - 18:00</td>
      <td></td>
    </tr>
    <tr>
      <td>18:00 - 19:00</td>
      <td></td>
    </tr>
    <tr>
      <td>19:00 - 20:00</td>
      <td></td>
    </tr>
    <tr>
      <td>20:00 - 21:00</td>
      <td></td>
    </tr>
    <tr>
      <td>21:00 - 22:00</td>
      <td></td>
    </tr>
    <tr>
      <td>22:00 - 23:00</td>
      <td></td>
    </tr>
  </div>
</table>

@endsection