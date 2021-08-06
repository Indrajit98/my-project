<header id="home">
    <nav>
        <div class="row">
            <a href="{{url('/')}}">
                <img src="{{asset('asset/')}}/resource/image/1111.png" alt="Offer-house" class="logo">
            </a>
            <ul class="main-nav">
                <li class="{{Request::is('/') ? 'active' : ''}}"><a href="{{action('User\HomeController@about')}}">home</a></li>
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
                        <li><a href="{{url('/about')}}">about</a></li>
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
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first">
                <img src="{{asset('asset/')}}/resource/image/slider4.png" alt="slider1">
            </div>
            <div class="slide">
                <img src="{{asset('asset/')}}/resource/image/slider3.png" alt="slider2">
            </div>
            <div class="slide">
                <img src="{{asset('asset/')}}/resource/image/slider2.png" alt="slider3">
            </div>
            <div class="slide">
                <img src="{{asset('asset/')}}/resource/image/slider1.png" alt="slider4">
            </div>
            <!-- <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div> -->

        </div>
    
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>
   
</header>