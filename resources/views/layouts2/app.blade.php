<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7JEP9FDZ4Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7JEP9FDZ4Z');

    </script>
    <script data-ad-client="ca-pub-4564109234786835" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('scripts')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Free Psycholog Medical Hospital Website Template | Smarteyeapps.com</title>


    <link rel="stylesheet" href="{{URL::asset('website/assets2/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('website/assets2/css/bootstrap-icons.css')}}">

    <link rel="stylesheet" href="{{URL::asset('website/assets2/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('website/assets2/css/owl.theme.default.min.css')}}">

    <link href="{{URL::asset('website/assets2/css/templatemo-pod-talk.css')}}" rel="stylesheet">




    <link rel="shortcut icon" href="{{URL::asset('website/assets/images/fav.jpg')}}">
    <link rel="stylesheet" href="{{URL::asset('website/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('website/assets/css/fontawsom-all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('website/assets/plugins/slider/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('website/assets/plugins/slider/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('website/assets/css/style.css')}}"/>
</head>

<body>

 <header id="menu-jk">
        <nav  class="">
            <div class="container">
                <div class="row nav-ro">
                   <div class="col-lg-3 col-md-4 col-sm-12">
                       <img src="{{URL::asset('website/assets/images/logo.jpg')}}" alt="">
                       <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                   </div>
                   <div id="menu" class="col-lg-7 col-md-8 d-none d-md-block no-padding">
                       <ul>
                            <li><a href="{{ route('website.home') }}">Home</a></li>
                            <li><a href="{{route('patient.course')}}">courses</a></li>
                            <li><a href="{{ route('patient.doctor') }}">Doctors</a></li>
                            <li><a href="#">Treatment</a></li>
                            <li><a href="#">More</a></li>
                            @auth
                              <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                            @endauth

                        </ul>
                   </div>
                   <div class="col-sm-2 d-none d-lg-block">
                   @guest
                      <a href="{{ route('login') }}"><button class="btn btn-success">login</button> </a>
                      <a href="{{ route('register') }}"> <button class="btn btn-success">register</button></a>
                      @else

                     @endguest


                   </div>
                </div>
            </div>
        </nav>
    </header>

    <div id="app" style="padding:100px">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

     <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_contact">
            <h4>
              Reach at..
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="footer_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_detail">
            <h4>
              About
            </h4>
            <p>
              Beatae provident nobis mollitia magnam voluptatum, unde dicta facilis minima veniam corporis laudantium alias tenetur eveniet illum reprehenderit fugit a delectus officiis blanditiis ea.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto footer_col">
          <div class="footer_link_box">
            <h4>
              Links
            </h4>
            <div class="footer_links">
              <a class="active" href="index.html">
                Home
              </a>
              <a class="" href="about.html">
                About
              </a>
              <a class="" href="departments.html">
                Departments
              </a>
              <a class="" href="doctors.html">
                Doctors
              </a>
              <a class="" href="contact.html">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col ">
          <h4>
            Newsletter
          </h4>
          <form action="#">
            <input type="email" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates<br><br></a>
            &copy; <span id="displayYear"></span> Distributed By
            <a href="https://themewagon.com/">ThemeWagon</a>
        </p>

      </div>
    </div>
  </footer>
</body>
<script src="{{URL::asset('website/assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{URL::asset('website/assets/js/popper.min.js')}}"></script>
<script src="{{URL::asset('website/assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('website/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js')}}"></script>
<script src="{{URL::asset('website/assets/plugins/slider/js/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('website/assets/js/script.js')}}"></script>
</html>
