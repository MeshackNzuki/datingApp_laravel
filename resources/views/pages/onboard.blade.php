<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Kenyanbabes is the only online dating app that matches you on what really matters to you. Find other singles are like you today!"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
      integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>On Board</title>
  </head>

  <body>
    <!-- Header -->
    <header>
      <div class="header-inner-wrapper">
        <div class="header-inner">
          <div class="sitename">Kenyanbabes.co.ke</div>
          <a href="#" class="login-button" onclick="showPopup()">LOG IN</a>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <main>
      <div class="container field-wrapper">
        <div class="field-1 field">
          <h3>Welcome to <span class="sitename">Kenyanbabes</span></h3>
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
            <div class="item active">Intelligence</div>
            <div class="item">Good Looks</div>
            <div class="item">Humor</div>
            <div class="item active">Great Bedroom Skills</div>
            <div class="item">Boldness</div>
            <div class="item">Money</div>
            <div class="item">Power</div>
            <div class="item active">Flirtatiousness</div>
            <div class="item">Wit</div>
            <div class="item">Endowment</div>
            <div class="item">Big Ass</div>
            <div class="item">Slim</div>
            <div class="item">Big Boobs</div>
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

          <input type="text" placeholder="contact info" />
		  

          <a href="#" class="continue-button" onclick="onStep5Click()"
            >CONTINUE</a
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
      </div>
    </main>

    <!-- Footer -->
    <footer>
      <div class="footer-onboard-wrapper">
        <div class="footer-onboard">
          <div class="footer-license">
            © Kenyanbabes.co.ke 2022 | All rights reserved.
          </div>
        </div>
      </div>
    </footer>

    <script src="js/onboard.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
