<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tani Organik Merapi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
  {{-- datepicker --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="/js/bootstrap-datepicker.js"></script>

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #bfbfbf;
      color: black;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
</head>

<body>

<div class="col-md-12 col">
    @include('layouts.nav')
</div>

<div class="col-md-12 col">
    <div class="row">
        <div class="col-md-3 col">
            <div class="container-fluid text-left">    
                <div class="row content">
                @include('layouts.sidebar')
                </div>
            </div>
        </div>

        <div class="col-md-7 text-left"> 
            @yield('content')
        </div>

        <div class="col-md-2 text-left"> 
            @include('layouts.side')
        </div>
    </div>
</div>

<script src="public/js/bootstrap-datepicker.js"></script>
<script>
$(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
</script>


<div class="col-md-12">
        @include('layouts.footer')
</div>


</html>











