@extends('layouts.app')
@section('content')

<body>
       <!-- Preloader -->
<div id="loader" class="d-block">
<div class="container2">
         <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
         </div>
         <div class="shadow_preloader"></div>
      </div>

</div>

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
                                <a href = "/signup" role="button"
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
							<a href = "/signup" role="button"
								class="main-btn btn btn-primary mt-4 py-3 rounded-pill fw-bold">CREATE
								PROFILE</a>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>

@endsection