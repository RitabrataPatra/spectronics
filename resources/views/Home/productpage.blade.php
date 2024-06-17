<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
  <link href="{{asset('asset/images/favicon/sai_spec-removebg-preview.png')}}" rel="icon">
  <title>Spectronics Healthcare LLP.</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
  <link rel="stylesheet" href="{{asset('asset/fonts/all.css')}}">
  <link rel="stylesheet" href="{{asset('asset/css/libraries.css')}}">
  <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <header class="header header-layout1">

      <!--LogOut-->
      
      <div class="header-topbar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                  <li>
                    <div class="list-inline-item logout">  
                      @if (Route::has('login'))

            @auth
            
            <form  method="POST" action="{{ route('logout') }}">
              @csrf
  
              <input class="btn btn-danger" type="submit" value="Logout">
          </form>
          {{-- @else
          <a  href="{{url('/login')}}">
            <i class="fa fa-user " aria-hidden="true"></i>
            <span class="btn btn-primary">
              Login
            </span>
          </a>
          <a href="{{url('/register')}}">
            <i class="fa fa-vcard" aria-hidden="true"></i>
            <span class="btn btn-secondary">
              Register
            </span>
          </a> --}}
          @endauth
        @endif

                        
                        
                        {{-- <a id="logout" href="login.html" class="nav-link">Logout <i class="icon-logout"></i></a></div> --}}
                    </div>
                    <button class="miniPopup-emergency-trigger" type="button">24/7 Emergency</button>
                    <div id="miniPopup-emergency" class="miniPopup miniPopup-emergency text-center">
                      <div class="emergency__icon">
                        <i class="icon-call3"></i>
                      </div>
                      <a href="tel:+201061245741" class="phone__number">
                        <i class="icon-phone"></i> <span>+91-33-40627462
                          +91-33-22156067</span>
                      </a>
                      <p>Please feel free to contact our friendly reception staff with any general or medical enquiry.
                      </p>
                      <a href="appointment.html" class="btn btn__secondary btn__link btn__block">
                        <span>Make Appointment</span> <i class="icon-arrow-right"></i>
                      </a>
                    </div><!-- /.miniPopup-emergency -->
                  </li>
                  <li>
                    <i class="icon-phone"></i><a href="tel:+5565454117">Contact: +91-33-40627462 
                      |  +91-33-22156067</a>
                  </li>
                  <li>
                    <i class="icon-location"></i><a href="#">Saimed Innovation
                      156A, Kolkata</a>
                  </li>
                  <li>
                    <i class="icon-email"></i><a href="contact-us.html">info@saimed.in</a>
                  </li>
                </ul><!-- /.contact__list -->
                <div class="d-flex">
                  <ul class="social-icons list-unstyled mb-0 mr-30">
                    <li><a href="https://www.facebook.com/pages/Saimed/1670003869890407"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/Saimed2"><i class="fab fa-twitter"></i></a></li>
                  </ul><!-- /.social-icons -->
                  <!-- <form class="header-topbar__search">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                  </form> -->
                </div>
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-top -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('asset/images/logo/logo-light.png')}}" class="logo-light" alt="logo">
            <img src="{{asset('asset/images/logo/sai_spec-removebg-preview (1).png')}}" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item">
                <a href="{{url('/')}}" class="nav__item-link {{Request::is('/')?'active':''}}">Home</a>
              </li><!-- /.nav-item -->
               <li class="nav__item {{Request::is('/about')?'active':''}}">
                <a href="{{url('/about')}}" class="nav__item-link">About Us</a>
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown {{Request::is('/productspage')?'active':''}}">
                <a href="{{url('/productspage')}}" data-toggle="dropdown" class="dropdown-toggle nav__item-link ">Products</a>
                <ul class="dropdown-menu">
                
                      
                  
                  <li class="nav__item">
                    
                        
                   
                    <a href="{{url('/productspage'.'/'.$category->id??null)}}" class="nav__item-link">{{$category->category}}</a> 
                 
                  </li> <!-- /.nav-item -->
                  
                  
                  
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->

              <li class="nav__item {{Request::is('/testimonialspage')?'active':''}}">
                <a href="{{url('/testimonialspage')}}" class="nav__item-link">Testimonials</a>
              </li><!-- /.nav-item -->
              
              <li class="nav__item {{Request::is('contact')?'active':''}}">
                <a href="{{url('/contact')}}" class="nav__item-link">Contact Us</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <div class="d-none d-xl-flex align-items-center position-relative ml-30">
            
            <a href="appointment.html" class="btn btn__primary btn__rounded ml-30">
              <i class="icon-calendar"></i>
              <span>Appointment</span>
            </a>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->


@include('Home.product')

@include('Home.footer')