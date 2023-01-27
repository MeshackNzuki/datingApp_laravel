@extends('layouts.app')

@section('content')

    <!-- Main Content -->
    <main>
      <div class="container field-wrapper">
      <form method="POST" action="{{ route('onboard_set_preferences') }}">
                        @csrf
        <div class="field-1 field">
      
          <h3>Welcome to <span class="sitename">luckymate</span></h3>
          <p>
            It looks like you're new here! I'm here to help make your experience
            the best it can be and help you find the perfect match for you. However you have to agree to the following before continuing.
			<ul>
			<li>Respect the wishes and privacy of other members even if you recognize them. Our users are normal people, not prostitutes or pornstars.</li>
            <li>Always practice safe sex.</li>
            <li>Our members are ONLY looking for casual sexual encounters.</li>
			</ul>
          </p>

          <a href="#" class="continue-button" onclick="onStep1Click()"
            >AGREE AND CONTINUE</a
          >

          <div class="steps">
            <div class="step active"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
          </div>
        </div>

        <div class="field-2 field" style="display: none">
          <h3>Nice to meet you <span class="name"></span></h3>
          <p>Lets get started helping you find your match.</p>
          <div class="text">My perfect match's age:</div>

          <div class="min-age-field">
            <i class="fa-solid fa-arrow-left" onclick="minAgeDecrease()"></i>
            <div class="min-age-text">18</div>
            <i class="fa-solid fa-arrow-right" onclick="minAgeIncrease()"></i>
          </div>
          <div class="max-age-field">
            <i class="fa-solid fa-arrow-left" onclick="maxAgeDecrease()"></i>
            <div class="max-age-text">30</div>
            <i class="fa-solid fa-arrow-right" onclick="maxAgeIncrease()"></i>
          </div>
          

          <a href="#" class="continue-button" onclick="onStep2Click()"
            >CONTINUE</a>

          <div class="steps">
            <div class="step active"></div>
            <div class="step active"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
          </div>
        </div>

        <div class="field-3 field" style="display: none">
          
		  <div class="text">My perfect match must have:</div>

          <div class="items">
            <input type="checkbox" value="intelligent" name="intelligence" class="item active">Intelligence</input>
            <input type="checkbox" name="goodlooks"  value="goodlooks"  class="item">Good Looks</input>
            <input type="checkbox" name="humor" value="humor" class="item">Humor</input>
            <input type="checkbox" name="bedroom_skills" value="bedroom_skills" class="item active">Great Bedroom Skills</input>
            <input type="checkbox" name="boldness"  value="boldness" class="item">Boldness</input>
            <input type="checkbox" name="money" value="money" class="item">Money</input>
            <input type="checkbox" name="power"  value="power" class="item">Power</input>
            <input type="checkbox" name="flirtatiousness"  value="flirtatiousness" class="item active">Flirtatiousness</input>
            <input type="checkbox" name="wit" value="wit"  class="item">Wit</input>
            <input type="checkbox" name="endowment" value="endowment" class="item">Endowment</input>
            <input type="checkbox" name="ass" value="ass" class="item">Big Ass</input>
            <input type="checkbox" name="petite" value="petite" class="item">Petite</input>
            <input type="checkbox" name="big_boobs" value="big_boobs" class="item">Big Boobs</input>
          </div>

          <a href="#" class="continue-button" onclick="onStep3Click()"
            >CONTINUE</a
          >

          <div class="steps">
            <div class="step active"></div>
            <div class="step active"></div>
            <div class="step active"></div>
            <div class="step"></div>
            <div class="step"></div>
          </div>
        </div>

        <div class="field-4 field" style="display: none">
          
         <div class="text">A sentence that would attract people to you:</div>

          <textarea
            cols="30"
            rows="10"
            maxlength="60"
            name="description"
            placeholder="Max 60 characters."
          ></textarea>

          <div class="info">
            Try something that sums you up what you want, who you are or just
            something witty to encourage people to check you out. You're almost
            done!
          </div>
          <a href="#" class="continue-button" onclick="onStep4Click()"
            >CONTINUE</a
          >

          <div class="steps">
            <div class="step active"></div>
            <div class="step active"></div>
            <div class="step active"></div>
            <div class="step active"></div>
            <div class="step"></div>
          </div>
        </div>

        <div class="field-5 field" style="display: none">
          <div class="text">My contact (number/email/telegram link etc) is:</div>
		  <p class = "small">Your contact info is only made visible to people you match. Otherwise it remains hidden.</p>

          <input type="text" name="contact" placeholder="contact info" />
		  

          <button href="#" type="submit" class="continue-button" onclick="onStep5Click()"
            >CONTINUE</button
          >

          <div class="steps">
            <div class="step active"></div>
            <div class="step active"></div>
            <div class="step active"></div>
            <div class="step active"></div>
            <div class="step active"></div>
          </div>
        </div>

        <div class="final-step field" style="display: none">
          <h3>Congratulations!</h3>
          <p>We have found perfect matches for you. Be prepared to see them and get laid, hopefully 😍</p>
          <div class="info">(You will be redirected in 2 seconds.)</div>
        </div>
       </form>
      </div>
    </main>
    <!-- Footer -->
    <script src="js/onboard.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
@endsection