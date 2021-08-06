<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offer House</title>
    <style>
        #ads {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#ads td, #ads th {
  border: 1px solid #ddd;
  padding: 8px;
}

#ads tr:nth-child(even){background-color: #f2f2f2;}

#ads tr:hover {background-color: #ddd;}

#ads th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #004f4e;
  color: white;
}
#ads a {
    background-color: #d60c0c;
    border: none;
    color: white;
    padding: 5px 11px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 11px;
    margin: 4px 2px;
    cursor: pointer;
}
.my-content .name img {
width: 150px;
height: 150px;
border-radius: 11%;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
    <link rel="stylesheet" href="{{asset('asset/')}}/fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="{{asset('asset/')}}/resource/css/style.css">
    <link rel="stylesheet" href="{{asset('asset/')}}/resource/css/responsive.css">
</head>

<body>
    <headers id="home">
        <nav>
            <div class="row">
                <a href="{{url('/')}}">
                    <img src="{{asset('asset/')}}/resource/image/1111.png" alt="Offer-house" class="logo">
                </a>
                <ul class="main-nav">
                    <li class="{{Request::is('/') ? 'active' : ''}}"><a href="{{url('/')}}">home</a></li>
                    <li class="{{Request::is('/about') ? 'active' : ''}}"><a href="{{url('/about')}}">about</a></li>
                    @if (isset(Auth::user()->email))
                        <li class="active"><a href="{{url('user-dashboard')}}">my account</a></li>
                        <li class="active">
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">logout</a>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                            @csrf
                                        </form>
                        </li>
                    @else
                        <li class="{{Request::is('/login') ? 'active' : ''}}"><a href="{{route('login')}}">login</a></li>
                        <li class="{{Request::is('/register') ? 'active' : ''}}"><a href="{{route('register')}}">signup</a></li>
                    @endif
                    
                    
                </ul>
                <!-- //////////////////////////////////////////////////////// -->
                <div class="mobile-menu">
                    <span onclick="openNav()">&#9776;</span>
                    <div  id="myNav" class="overlay">
                        <a href="javascript:void(0)" onclick="closeNav()" class="close-btn">&times;</a>
                        <div class="overlay-content">
                            <a onclick="closeNav()" href="{{url('/')}}">home</a>
                            <a onclick="closeNav()" href="{{url('/about')}}">about</a>
                            @if (isset(Auth::user()->email))
                                <a onclick="closeNav()" href="{{url('user-dashboard')}}">my account</a>
                                <a onclick="closeNav()" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">logout</a>
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                                @csrf
                                            </form>
                            @else
                                <a onclick="closeNav()" href="{{route('login')}}">login</a>
                                <a onclick="closeNav()" href="{{route('register')}}">sign-up</a>
                            @endif
    
                        </div>
                    </div>
                </div>
                <!--//////////////////////////////////////////////////////////////-->

            </div>
        </nav>
        @yield('content')
    
    </headers>
    @include('footer')
    
    <!-- <script src="{{asset('asset/')}}/resource/js/upload-file-validation.js"></script> -->
    @yield('script')
</body>

</html>