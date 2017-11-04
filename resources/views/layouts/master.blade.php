<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tani Organik Merapi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



{{-- bootstrap --}}
  <link rel="stylesheet" href="/css/bootstrap.min.css">

{{-- datepicker --}}
  <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="/js/jquery.min.js"></script>

{{-- font --}}
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  



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

        <div class="col-md-9 text-left"> 
            @yield('content')
        </div>

    </div>
</div>


{{-- datepicker --}}
  <script src="/js/bootstrap-datepicker.js"></script>
{{-- bootstrap --}}
  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
</body>


<footer class="text-center">
@include('layouts.footer')
</footer>

</html>











