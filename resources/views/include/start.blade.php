<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>@yield('title')</title>
<meta name="keywords" content="@yield('tagkeyword')" />
<meta name="description" content="@yield('tagdescription')" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@thailife" />
<meta name="twitter:creator" content="@thailife" />

<link rel="canonical" href="/"/>
<link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('css/bootstrap-select.css')}}">
<link rel="stylesheet" href="{{ asset('css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ asset('css/main.css')}}">

<link rel="stylesheet" href="{{ asset('fontawesome/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('fontawesome/all.min.css')}}">

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
<script rel="preload" src="{{ asset('js/jquery-1.12.3.js') }}"></script>
<script rel="preload" src="{{ asset('js/popper.min.js') }}"></script>
<script rel="preload" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script rel="preload" src="{{ asset('js/jquery-ui-1.11.4.custom.js') }}"></script>
  
<!-- Bootstrap Select -->
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>

<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Script Loading -->
    <div class="se-pre-con loading">
        <div class="group-loading">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- /Script Loading -->
    
    @yield('contentpage')
    
    <script>
        $(document).ready(function() {
            $(window).load(function () {
                $(".se-pre-con.loading").fadeOut(1000);
            });
        });
    </script>
</body>
</html>
