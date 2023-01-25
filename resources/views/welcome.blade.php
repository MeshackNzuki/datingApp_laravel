<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="luckymate is the only online dating app that matches you on what really matters to you. Find other singles are like you today!">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
    <title>The Best Dating Site in Kenya</title>
    
</head>

<body>
    <!-- Header -->
    <header class="container">
        <div class="row">
            <div class="col-8 d-flex justify-content-between mx-auto py-3">
                <!-- Site Name -->
                <div class="sitename fs-4 fw-bold">
					<a href = "index.html"><img src="imgs/logo.png" alt="kenyan babes logo" class = "img-fluid" height = "60" width = "196"></a>
				</div>
                <div class="login-box">
                    <button type="button" class="login-btn btn btn-outline-info rounded-pill px-4 "
                        onclick="onLoginClick()">Log In</button>
                        <a href="/signup" type="button" class="login-btn btn btn-outline-info rounded-pill px-4 "
                      >Register</a>
                </div>
        
            </div>
        </div>
        <!-- Sign in popup box -->
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
                                <a href = "/onboard" class="link-anchor text-center">Join free</a>
                            
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
    </header>

<!-- Main Section -->
    <Section class="container">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="row mt-5">
                    <div class="col-lg-6 py-5">
                        <div class="row hero-content">
                            <div class="fw-bold ps-4 mb-3 "><span class="hero-badge rounded-pill px-3 py-1">NO-STRINGS
                                    ATTACHED
                                    DATING SITE</span></div>
                            <div class="fs-2 fw-bold hero-title">Looking to find a friend with benefits?</div>
                            <div class="fs-6 text-secondary hero-description">
							
							<p>Looking to find friends with benefits? luckymate is all about that. We make it easier. All members on the site are looking to get laid. </p>
							<p>Stop stressing yourself with other dating sites if all you need is some steamy sessions. </p>
							<p>Create a profile, chat, meet, get laid!</p>
							
                            </div>
                            <div class="main-btn-box row px-5">
                                <a href = "index.html" role="button"
                                    class="main-btn btn btn-primary mt-4 px-5 py-2 rounded-pill fw-bold">JOIN</a>

                            </div>
                        </div>
                    </div>
					<div class = "col-lg-6 py-5">
						<img src = "imgs/love-birds.png" class="img-fluid" alt = "love birds" />
					</div>
                </div>
            </div>
			
        </div>
    </Section>

    <!-- Why us Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="why-us col-lg-8 mx-auto py-5">
                    <div class="row why-us-top text-center">
                        <h4 class="fw-bold">The Best No-Strings Attached Dating Site</h4>
                        <p>Online dating just got a lot more fun and a lot sexier since you found us!</p>
                    </div>

                    <!-- Why-us-advantages -->

                    <!-- Advantage -right -->
                    <div class="why-us-adv row my-4 m-3 p-3">
                        <div class="col-lg-6">
							<img src = "imgs/email.png" class="img-fluid" alt = "confidentiality" />
						</div>
                        <div class="col-lg-6">
                            <div class="row">
                                <h5 class="fw-bold">Confidentiality</h5>
                                <p class="text-secondary">Our goal is to make our users personal information and
                                    communications private. All data
                                    is strictly confidential.</p>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Advantage Left -->
                    <div class="why-us-adv row m-3 p-3">
                        <div class="col-lg-6">
                            <h5 class="fw-bold">Verified users</h5>
                            <p class="text-secondary">Each profile registered on the site is verified through
                                authentication.
                                You can be sure
                                that the people on the site are real and want to get laid.</p>
                            
                        </div>
						<div class="col-lg-6">
							<img src = "imgs/active-user.png" class="img-fluid" alt = "verified users" />
						</div>
                    </div>
					<div class="row why-us-top text-center m-3 p-3">
                        <h4 class="fw-bold">luckymate Is The Hottest Singles Site Around Right Now!</h4>
                        <p>Our singles site might not be all about romance or love, but if you are looking for an encounter that is hot and exciting and that you will never forget then our site is exactly what you have been looking for. Your search for the ideal online dating service just ended the moment you set foot on our site.</p>
						<div class="main-btn-box row px-5">
							<a href = "index.html" role="button"
								class="main-btn btn btn-primary mt-4 py-3 rounded-pill fw-bold">CREATE
								PROFILE</a>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <hr>
            <div class="footer-content text-secondary ps-3 pb-3">&#169; luckymate.co.ke 2022 | All rights reserved.
            </div>
        </div>
    </footer>


</body>

</html>
<script src="js/site.js"></script>