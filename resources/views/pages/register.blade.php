@extends('layouts.app')

@section('content')
  <div class="container fluid">
    <header>
      <h2 class="text-center fw-bold m-3" id="text-color"><a href = "index.html"><img src="imgs/logo.png" alt="kenyan babes logo" class = "img-fluid" height = "60" width = "196"></a></h2>
    </header>

    <h4 class="text-secondary  text-center mt-5 fw-bold">GET LAID WHEN YOU</h4>
    <p class="text-center fw-bold fs-2" id="text-color">
      <span class="text-dark">JOIN</span> luckymate!
    </p>
    <form method="POST" action="{{ route('signup_store') }} " id="signup-form">
    @csrf
    <div class="frame">
      <div class="row">
        <div class="col-lg-4 col-sm-8 col-8 col-md-6 mx-auto">
          <div class="form">
            <!-- Steps Box -->
            <div class="steps-box d-flex flex-direction-row justify-content-center py-2 mt-5">
              <div class="step step-active mx-1"></div>
              <div class="step mx-1"></div>
              <div class="step mx-1"></div>
              <div class="step mx-1"></div>
              <div class="step mx-1"></div>
            </div>

            <!-- Step-1 -->
            <div class="step-text text-center fw-bold py-2">Step 1: <span class="text-secondary fw-normal">What are you
                looking
                for</span>
            </div>

            <!-- Select box -->
            <select id="sex" name="sex"  class="select-box mb-3 fs-6" required  autocomplete="sex">
              <option selected>Male seeking Female</option>
			        <option value="3">Female seeking Male</option>
              <option value="1">Male seeking Male</option>              
              <option value="4">Female seeking Female</option>              
            </select>
            @error('sex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <div class="row px-4">
              <button type="button" class="next-btn btn btn-primary mt-4 px-5 py-2 rounded-pill"
                onclick="onNext1Click()">NEXT</button>
            </div>
          </div>
          <div class="form2 d-none">
            <!-- Steps Box -->
            <div class="steps-box d-flex flex-direction-row justify-content-center py-2 mt-5">
              <div class="step step-active mx-1"></div>
              <div class="step step-active mx-1"></div>
              <div class="step mx-1"></div>
              <div class="step mx-1"></div>
              <div class="step mx-1"></div>
            </div>

            <!-- Step-2 -->
            <div class="step-text text-center fw-bold py-2">Step 2: <span class="text-secondary fw-normal">What is your
                age</span>
            </div>
            <input id="age" type="number" placeholder="Age" name="age" class="select-box" required  autocomplete="age">
            @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <div class="row px-4">
              <button type="button" class="next-btn btn btn-primary mt-4 px-5 py-2 rounded-pill"
                onclick="onNext2Click()">NEXT</button>
            </div>
          </div>
          <div class="form3 d-none">
            <!-- Steps Box -->
            <div class="steps-box d-flex flex-direction-row justify-content-center py-2 mt-5">
              <div class="step step-active mx-1"></div>
              <div class="step step-active mx-1"></div>
              <div class="step step-active mx-1"></div>
              <div class="step mx-1"></div>
              <div class="step mx-1"></div>
            </div>

            <!-- Step-3 -->
            <div class="step-text text-center fw-bold py-2">Step 3: <span class="text-secondary fw-normal">Where are you
              </span>
            </div>
            <!-- Autocomplete location search input --> 
              <label class="ms-4 py-2">Estate/Town/City</label>
              <input type="text" id="search_input" class="select-box"  id="location" name="location" placeholder="Type address..." />
                <input type="hidden" id="loc_lat" />
                <input type="hidden" id="loc_long" />
           
            <div class="row px-4">
              <button type="button" class="next-btn btn btn-primary mt-4 px-5 py-2 rounded-pill"
                onclick="onNext3Click()">NEXT</button>
            </div>
          </div>
          <div class="form4 d-none">
            <!-- Steps Box -->
            <div class="steps-box d-flex flex-direction-row justify-content-center py-2 mt-5">
              <div class="step step-active mx-1"></div>
              <div class="step mx-1 step-active"></div>
              <div class="step mx-1 step-active"></div>
              <div class="step mx-1 step-active"></div>
              <div class="step mx-1"></div>
            </div>

            <!-- Step-4 -->
            <div class="step-text text-center fw-bold py-2">Step 4: <span class="text-secondary fw-normal">Email
                Address</span>
            </div>


           
            <label class="ms-4 mb-1">My email adress is:</label>
            <input id="email" type="email"  placeholder="Email:" name="email" class="select-box form-control input-w" required  autocomplete="email">
            <label for='email'></label>
            <div class="row px-4">
              <button type="button" class="next-btn btn btn-primary mt-4 px-5 py-2 rounded-pill"
                onclick="onNext4Click()">NEXT</button>
            </div>
          </div>
          <div class="form5 d-none">

            <!-- Steps Box -->
            <div class="steps-box d-flex flex-direction-row justify-content-center py-2 mt-5">
              <div class="step step-active mx-1"></div>
              <div class="step mx-1 step-active"></div>
              <div class="step mx-1 step-active"></div>
              <div class="step mx-1 step-active"></div>
              <div class="step mx-1 step-active"></div>
            </div>


            <!-- Step-1 -->
            <div class="step-text text-center fw-bold py-2">Step 5: <span class="text-secondary fw-normal">Create your
                username and password</span>
            </div>
            <label class="ms-4 my-2">User name:</label>
            <input id="name" type="text" placeholder="name" name="name" value="{{ old('name') }}" class="select-box mb-2 form-control input-w" required  autocomplete="name">

            @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <label class="ms-4 my-2">Password:</label>
            <input id="password" placeholder="password" type="Password" name="password" class="select-box" required  autocomplete="new-password">

                <span class="error" role="alert">
                </span>
                               
                                <label class="ms-4 my-2">Confirm Password:</label>
          <input id="password_confirmation" type="Password" placeholder="password confirmation" name="password_confirmation" class="select-box" required  autocomplete="new-password">
          <span class="text-danger" role="alert">
                               
          </span>
            <div class="row px-4">
              <button type="submit" class="next-btn btn btn-primary mt-4 px-5 py-2 rounded-pill"
                >FINALIZE ACCOUNT</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</form>
    <!-- Sign in -->
    <p class="text-center text-secondary m-4">Already a member?<a href="#" id="sign-anchor" onclick="onsigninClick()">
        Sign in</a></p>
    <!-- Sign in popup box -->
    <div class="container signinPopupBox py-5 position-fixed top-0 d-none">
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
              <div class="emailBox row px-4 py-2">
                <input type="email" placeholder="Email" class="text-center">
              </div>
              <div class="passwordBox row px-4 py-2">
                <input type="password" name="" id="" placeholder="Password" class="text-center">
              </div>
              <div class="joinNow d-flex flex flex-direction-row justify-content-between px-3 py-2">
                <a href="index.html" class="link-anchor text-center">Join free</a>
                <a href="#" class="link-anchor text-center" onclick="onforgotPasswordClick()">Forgot Password?</a>
              </div>
              <div class="row px-4">
                <button type="button" class="next-btn btn btn-primary mt-4 px-5 py-2 rounded-pill"
                  onclick="onLoginClick()">LOGIN</button>
              </div>
            </div>

            <!-- Forgot Password -->
            <div class="forgotPasswordContent d-none">
              <h6 class="text-secondary px-5 text-center pb-4">Enter your email address and we will send you further
                instructions</h6>
              <div class="emailBox row px-4 py-2">
                <input type="email" placeholder="Email" class="text-center">
              </div>

              <div class="row px-4">
                <button type="button" class="next-btn btn btn-primary mt-4 px-5 py-2 rounded-pill"
                  onclick="onLoginClick()">RESET PASSWORD</button>
              </div>
            </div>
        </div>


      </div>
    </div>

    <!-- Container - info -->
    <section>
      <div class="container-lg my-5">
        <!-- Heading Row -->
        <div class="row">
          <h2 class="fw-bold text-center my-3">luckymate.co.ke Is The Hottest Singles Site Around Right Now!</h2>
          <p class="text-secondary">Kenyababes is a singles site where finding someone to go on a date with has been
            made easier than you could
            ever ask it to be! Quite simply, for Kenyan men and women there is no better dating site around right now
            for you to be able to find that kind of date that you have always dreamt of having. Our singles site might
            not be all about romance or love, but if you are looking for an encounter that is hot and exciting and that
            you will never forget then our site is exactly what you have been looking for. Your search for the ideal
            online dating service just ended the moment you set foot on our site.</p>

          <p class="text-secondary">We are so confident that you will find the right person or people for you quite
            simply because our other
            members regularly tell us just how much of a difference luckymate.co.ke has made to their dating lives. It
            has worked for them and we know that it will work for you as well. If you have never been a member of a
            singles site before then it will take you almost no time at all in getting used to how it all works because
            it really is far easier than you might expect. Just fill in your profile, start browsing through the many
            profiles that we have on our site, and then contact anyone that you like the look of. That is all there is
            to it! Online dating just got a lot more fun and a lot sexier since you found us!</p>
        </div>
      </div>
    </section>

 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=datingapp&key=AIzaSyAcUA3BsiMTEW3safCIqH5JHMEN1jMT17Y"></script>


<script>

var searchInput = 'search_input';

$(document).ready(function () {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });
	
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var near_place = autocomplete.getPlace();
        document.getElementById('loc_lat').value = near_place.geometry.location.lat();
        document.getElementById('loc_long').value = near_place.geometry.location.lng();
		
        document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
        document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
    });
});

$(document).on('change', '#'+searchInput, function () {
    document.getElementById('latitude_input').value = '';
    document.getElementById('longitude_input').value = '';
	
    document.getElementById('latitude_view').innerHTML = '';
    document.getElementById('longitude_view').innerHTML = '';
});

var autocomplete;
autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
    types: ['geocode'],
    componentRestrictions: {
        country: "USA"
    }
});
</script>
@endsection