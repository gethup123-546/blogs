<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <link rel="stylesheet" href="{{url('frontend/css/custom-bs.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/fonts/line-icons/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/quill.snow.css')}}">
    

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">    
  </head>
  <body>
  
   <div class="site-wrap">

      <!-- HOME -->
      <section class="section-hero overlay inner-page bg-image" style="background-image: url('frontend/images/hero_1.jpg');" id="home-section">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <h1 class="text-white font-weight-bold">Our Blog</h1>
              <div class="custom-breadcrumbs">
                <a href="#">Home</a> <span class="mx-2 slash">/</span>
                <span class="text-white"><strong>About Us</strong></span>
              </div>
            </div>
          </div>
        </div>
      </section>

        <!-- NAVBAR -->
        <header class="site-navbar mt-3">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="site-logo col-6"><a href="index.html">Job <span style='color:chartreuse'><b>Board</b> </span> </a></div>
  
              
              
              <nav class="mx-auto site-navigation">
                <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                  
                @auth
                     
                  <li><a href="{{route('home')}}" class="nav-link">posts</a></li>
                  <li><a href="{{route('profile',auth()->user()->id)}}">profile</a></li>
                  
                  <li><a href="{{route('dashbord')}}">dashbord</a></li>
                  <li><a href="{{route('create_post')}}">create</a></li>

                  <li>

                     <li>
                        <a class="nav-link" href="{{ url('/logout')}}">logout</a>
                      </li>
                     @else
                     <li>
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      
                      <li>
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                     @endauth
                     <ul class='dropdown-menu'>
                       <li><a href="">os os</a></li>
                     </ul>
                     

           
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </header>
<div class='mt-2'>
  @include('layouts/messages')   
</div>

        <main style='margin-top:6%;margin-bottom:6%;'>
          @yield('content')
        </main>

  
      <footer class="site-footer">

        <a href="#top" class="smoothscroll scroll-top">
          <span class="icon-keyboard_arrow_up"></span>
        </a>
    
        <div class="container">
          <div class="row mb-5">
            <div class="col-6 col-md-3 mb-4 mb-md-0">
              <h3>Search Trending</h3>
              <ul class="list-unstyled">
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Graphic Design</a></li>
                <li><a href="#">Web Developers</a></li>
                <li><a href="#">Python</a></li>
                <li><a href="#">HTML5</a></li>
                <li><a href="#">CSS3</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
              <h3>Company</h3>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Resources</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
              <h3>Support</h3>
              <ul class="list-unstyled">
                <li><a href="#">Support</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms of Service</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
              <h3>Contact Us</h3>
              <div class="footer-social">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-instagram"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
    
          <div class="row text-center">
            <div class="col-12">
              <p class="copyright"><small>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://google.com" target="_blank" >google</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
            </div>
          </div>
        </div>
      </footer>


    <!-- SCRIPTS -->
    <script src="{{url('frontend/js/jquery.min.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('frontend/js/stickyfill.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.easing.1.3.js')}}"></script>
    
    <script src="{{url('frontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('frontend/js/quill.min.js')}}"></script>
    
    
    <script src="{{url('frontend/js/bootstrap-select.min.js')}}"></script>
    
    <script src="{{url('frontend/js/custom.js')}}"></script>
   


   
   </div>
  </body>
 </html>
