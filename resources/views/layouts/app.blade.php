<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link rel="stylesheet" type="text/css" href="{{ asset('site/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('site/css/open-iconic-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('site/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('site/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('site/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('site/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('site/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('site/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('site/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('site/css/jquery.timepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('site/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('site/css/icomoon.css') }}">
  <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('site/css/line-awesome.min.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="">
        <img src="{{ asset('site/images/logo.png') }}">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>

      <form class="form-inline d-flex justify-content-center md-form form-sm mt-0 search_new">
        <i class="fa fa-search" aria-hidden="true"></i>
        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Sök aktie"
          aria-label="Search">
      </form>
      <div class="collapse navbar-collapse" id="ftco-nav">
<?php
  /* logged in user */
  // $headerclass = 'navbar_nav_profile';
  /* logged out user */
  // $headerclass = 'ml-auto';
?>

        <ul class="navbar-nav ci-header-class">
          <li class="nav-item icon-item noti-item"><a class="nav-link" href="#" onclick="alert('Comming soon!');" ><i class="la la-bell-o"></i></a> <span></span></li>
          <li class="nav-item icon-item"><a class="nav-link" href="#"  onclick="alert('Comming soon!');" ><i class="la la-envelope-o"></i></a></li>
          <li class="nav-item dropdown icon-item user-item">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-user"></i> <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
              @guest
                @if (Route::has('login'))
                  <li class="nav-item"><a href="#" class="nav-link btn btn-primary btn-outline-primary login_btn" data-toggle="modal" data-target="#login" anim="ripple">Logga in</a></li>
                @endif

                @if (Route::has('register'))
                  <li class="nav-item"><a href="#" class="nav-link btn btn-primary sign_up_btn" data-toggle="modal" data-target="#login" anim="ripple">Bli medlem</a></li>
                @endif
              @else
                <li><a href="email-verification">View Profile</a></li>
                <li><a href="email-verification">Edit Profile</a></li>
                <li><a href="email-verification">Setting</a></li>
                <li><a href="logout" class="text text-danger">Logout</a></li>
                <li><a href="user-profile">----View Profile</a></li>
                <li><a href="edit-user-profile">Edit Profile</a></li>
                <li><a href="settings">Setting</a></li>
                <li>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </li>
              @endguest
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="py-4">
    @yield('content')
  </main>
  <footer class="ftco-footer">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-md-8 text-left">
          <ul class="list-unstyled">
            <li><a href="about" class="py-2 d-block">About Us</a></li>
            <li><a href="" class="py-2 d-block">|</a></li>
            <li><a href="careers" class="py-2 d-block">Careers</a></li>
             <li><a href="" class="py-2 d-block">|</a></li>
             <li><a href="disclaimer" class="py-2 d-block">Disclaimer</a></li>
            <li><a href="" class="py-2 d-block">|</a></li>
            <li><a href="privacy" class="py-2 d-block">Privacy</a></li>
            <li><a href="" class="py-2 d-block">|</a></li>
            <li><a href="rules" class="py-2 d-block">Rules</a></li>
            <li><a href="" class="py-2 d-block">|</a></li>
            <li><a href="terms" class="py-2 d-block">Terms</a></li>
            <li><a href="" class="py-2 d-block">|</a></li>
            <li><a href="help" class="py-2 d-block">Help</a></li>
          </ul>
        </div>
        <div class="col-md-4 text-right">
          <p class="m-0">
            Copyright @ All rights reserved.. 
          </p> 
        </div>
      </div>
    </div>
  </footer>
  <!---------Register Form---------------> 
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog_login">
      <div class="modal-content">
        <div class="modal-body">
          <div class="container1" id="container">
            <div class="form-container sign-up-container mt-2">
              <form  action="#" id="registeruser" method="POST" >
                <h1 class="font-weight-bold">Registrera dig</h1>
                <p>Fyll i informationen nedan för att skapa ett konto, vi kommer att skicka ut en verifierings länk via mail, du måste aktiver ditt konto innan du kan logga in</p>
           <span id="smsg"></span>
         <span id="fmsg"></span>
      <div class="div_input">
    	<img src="assets/site/images/user22.png">
        <input type="text"  name="full_name" id="full_name" placeholder="Fullständiga namn" />
        </div>
        
         <span id="emsg"></span>
      <div class="div_input">
    	<img src="assets/site/images/envelope.png">
        <input type="email" name="email" id="email" placeholder="E-post" />
        </div>
        
         <span id="umsg"></span>
         <div class="div_input">

    	<img src="assets/site/images/phone.png">
        <input type="text"  name="phone"  id="phone" placeholder="telefonnr" />
        </div>
        
         <span id="pmsg"></span>
      <div class="div_input">
    	<img src="assets/site/images/lock.png">
        <input type="password" name ="password" id="password" placeholder="Lösenord" />
    </div>
    
        <button class="btn btn-primary"  type="button" onclick="registerusersubmit()" anim="ripple">Skapa konto</button>
      </form>
    </div>
    
     <!---------Register Form End---------------> 
     
      <!---------Login Form---------------> 
            <div class="form-container sign-in-container">
              <form action="#" id="loginuser" method="POST" >
                <h1 class="font-weight-bold">Logga in</h1>
                <p>Fyll i informationen nedan för logga in.</p>
                <span id="loginmsg"></span>
                <span id="loginemsg"></span>
                <div class="div_input">
                  <img src="assets/site/images/envelope.png">
                  <input type="email" name="email"  id="loginemail" placeholder="E-post" />
                </div>

                <span id="loginpmsg"></span>
                <div class="div_input">
                  <img src="assets/site/images/lock.png">
                  <input type="password" name="password" id="loginpassword" placeholder="Lösenord" />
                </div>

                <a href="<?php echo base_url();?>forgot-password"  target="_blank" class="text-center forgot_pas">Glömt ditt lösenord?</a>
                <button class="btn btn-primary"  type="button" onclick="userlogin()" anim="ripple">Logga in</button>
              </form>
            </div>

            <!---------Login Form End---------------> 
            <div class="overlay-container">
              <div class="overlay bx_color">
                <div class="overlay-panel overlay-left">
                  <h1 class="font-weight-bold">Välkommen tillbaka!<h1>
                  <p>Logga in för att ta del av all ny information. Alla nya tweets, aktiedata och mycket mer.</p>
                  <button class="btn btn-primary" id="signIn" anim="ripple">Logga in</button>
                </div>
                <div class="overlay-panel overlay-right">
                  <h1 class="font-weight-bold">Hej!</h1>
                  <p>Vill du också ta del av all ny information,alla nya tweets, aktiedata och mycket mer.</p>
                  <button class="btn btn-primary" id="signUp" anim="ripple">Bli medlem</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>