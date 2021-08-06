<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Offer House</title>
    <link rel="stylesheet" href="login.html">
    <!--fontawesome file-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/')}}/fontawesome-free-5.15.1-web/css/all.css">
    <!--vendors file-->
    <link rel="stylesheet" href="{{asset('asset/')}}/vendors/css/grid.css">
    <!--resources finle-->
    <link rel="stylesheet" href="{{asset('asset/')}}/resource/css/style.css">
    <link rel="stylesheet" href="{{asset('asset/')}}/resource/css/responsive.css">
    <style>
        .my-content .name img {
    width: 150px;
    height: 150px;
    border-radius: 11%;
}
    </style>
</head>

<body>
    @include('user-header')

    <!--End Header section-->
    <!--Start main section-->
    @yield('content')
      <!--End main section-->
    @include('footer')
    <!--JS script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('asset/')}}/resource/js/slide.js"></script>
    <script src="{{asset('asset/')}}/vendors/js/html5shiv.min.js"></script>
    <script src="{{asset('asset/')}}/vendors/js/respond.min.js"></script>
    <script src="{{asset('asset/')}}/vendors/js/selectivizr-min.js"></script>
    <script src="{{asset('asset/')}}/vendors/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('asset/')}}/resource/js/sticky.js"></script>
    <script src="{{asset('asset/')}}/resource/js/main.js"></script>
    @yield('script')
</body>
</html>