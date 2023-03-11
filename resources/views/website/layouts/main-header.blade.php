    <!-- ################# Header Starts Here#######################--->

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
