

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
   <!-- jQuery library -->
   <script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    

</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">          
                    
                    <div class="">
                        <a href = "/"><img src="imgs/logo.png" alt="lucky mate logo" class = "img-fluid" style="height:60px"></a>
                    </div>

                <button class="navbar-toggler  border-0 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                            Activity<span class="badge bg-badge mx-2">
                                    {{   Auth::user()->friends->count() +
                                        Auth::user()->pendingFriendsTo->count()}}
                            </span>
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
                                <li class="nav-item d-none d-sm-block">
                                <div class="login-box">
                                <a href="/signup" role="button" class="login-btn btn btn-outline-info rounded-pill px-4 ">Sign Up</a>
                                   
                                </div>
                                </li>
                            @endif
                            @else                                                 
                                @if(Auth::user()->avatar)
                                <img
                                    src="./avatars/{{Auth::user()->avatar}}"
                                    class="img-fluid rounded-circle"
                                    style="height: 40px; width: 40px"
                                    alt=""
                                    />
                                 @endif   
                             <li class="nav-item">       
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}</a>

                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="">
                                        <li><a class="dropdown-item" href="/settings"><i class=""></i><i class="fa fa-user" style="color:purple"></i> Profile</a></li>
                                        <li>
                                        <a class="dropdown-item " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <i class="fa fa-sign-out" style="color:purple"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    
                                    </li>
                                    </ul>   

                 

                                
                            </li>
                               @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
                   <!-- Sign in popup box -->      
            @yield('content')
            <footer>
        <div class="container text-cnter">
            <hr>
            <div class="footer-content text-secondary ps-3 pb-3">&#169; luckymate.co.ke 2022 | All rights reserved.<a href="/terms" class=" footer-content text-secondary ps-3 pb-3 me-auto">Our terms</a></div>
        </div>
    </footer>
        </main>
        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
        <html>
        <script src="js/site.js"></script>