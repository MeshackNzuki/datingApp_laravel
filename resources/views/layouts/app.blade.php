<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>The Best Dating Site in Kenya</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- styles and fonts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div id="app">
        
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand navlinks" href="{{ url('/') }}">
                <span class="sitename fs-4  ">Luckymate.co.ke</span>
                
               </a>
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                         <!--Nav links -->
                         @guest
                            @if (Route::has('login'))
                             
                            @endif

                            @if (Route::has('register'))
                           
                            @endif
                            @else                            
                        <div class="navlinks d-flex flex-row">
                            <a href="/browse" class="encounters fw-bold pt-2 mx-3 pe-auto">Browse</a>
                            <a href="/activity" class="activity fw-bold pt-2 mx-3 pe-auto">
                            Activity<span class="badge bg-badge mx-2">5</span>
                            </a>
                        </div>
                                                    @endguest
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                              <li class="nav-item">
                                <div class="login-box">
                                <a href="/login" class="login-btn btn btn-outline-info rounded-pill px-4 me-3 ">Login</a>
                                </div>
                              </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                <div class="login-box">
                                <a href="/signup" role="button" class="login-btn btn btn-outline-info rounded-pill px-4 ">Sign Up</a>
                                   
                                </div>
                                </li>
                            @endif
                            @else                            
                             <li class="nav-item">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                               @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
                   <!-- Sign in popup box -->
      
            @yield('content')
        </main>
    </div>
    
    <footer>
        <div class="container">
            <hr>
            <div class="footer-content text-secondary ps-3 pb-3">&#169; luckymate.co.ke {{date("Y")}} | All rights reserved.     <a class=" text-secondary ps-3 pb-3 me-32" href="/terms"> Terms </a>
            </div>
        </div>
    </footer>
    <script src="js/site.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
<div class="container signinPopupBox py-5 position-fixed top-0 left-0 d-none">
            <div class="row">
                <!-- Login Form -->
                
                <div class="signinPopup col-lg-4 col-8 col-sm-6 mx-auto pb-5 pt-4 rounded-4 position-relative">
                    <h4 class="text-center fw-bold mb-5">Log in</h2>
                        <div class="crossMark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                class="cross-svg bi bi-x text-secondary" viewBox="0 0 16 16">
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </div>
                        <div class=" signin-content">
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                    
               
                            <div class="emailBox row px-4 py-2">
                                <input id="email" type="email" class="@error('email') is-invalid @enderror text-center" placeholder="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="passwordBox row px-4 py-2">
                                <input id="password" placeholder="Password" class="text-center" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                           </div>
                            <div class="joinNow d-flex flex flex-direction-row justify-content-between px-3 py-2">
                                <a href = "/signup" class="link-anchor text-center">Join free</a>
                            
                                    @if (Route::has('password.request'))
                                    <a class="link-anchor text-center" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="row px-4">
                                <button  type="submit" 
                                    class="main-btn btn btn-primary mt-4 px-5 py-2 rounded-pill"> {{ __('Login') }}</button>
                            </div>
                            </form>
                        </div>

                        <!-- Forgot Password 
                        <div class="forgotPasswordContent d-none">
                            <h6 class="text-secondary px-5 text-center pb-4">Enter your email address and we
                                will send you further
                                instructions</h6>
                            <div class="emailBox row px-4 py-2">
                                <input type="email" placeholder="Email" class="text-center">
                            </div>

                            <div class="row px-4">
                                <button type="button"
                                    class="main-btn btn btn-primary mt-4 px-5 py-2 rounded-pill">RESET PASSWORD</button>
                            </div>
                        </div>
                        -->
                </div>


            </div>
        </div> 
</html>
     <script src="js/site.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>