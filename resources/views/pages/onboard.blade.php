@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main>
        <div class="container field-wrapper">
            <form id="onboardform" method="POST" action="{{ route('onboard_set_preferences') }}">
                @csrf
                <div class="field-1 field">

                    <h3>Welcome to <span class="sitename">LuckyMate</span></h3>
                    <p>
                        It looks like you're new here! I'm here to help make your experience
                        the best it can be and help you find the perfect match for you. However you have to agree to the
                        following before continuing.
                    <ul>
                        <li>Respect the wishes and privacy of other members even if you recognize them. Our users are normal
                            people, not prostitutes or pornstars.</li>
                        <li>Always practice safe sex.</li>
                        <li>Our members are ONLY looking for casual sexual encounters.</li>
                    </ul>
                    </p>

                    <a href="#" class="continue-button" onclick="onStep1Click()">AGREE AND CONTINUE</a>

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
                        <i class="fa fa-arrow-left" onclick="minAgeDecrease()"></i>
                        <div name="min_age" id="min_age" class="min-age-text">18</div>
                        <i class="fa fa-arrow-right" onclick="minAgeIncrease()"></i>
                    </div>
                    <div class="max-age-field">
                        <i class="fa fa-arrow-left" onclick="maxAgeDecrease()"></i>
                        <div name="max_age" id="max_age" class="max-age-text">30</div>
                        <i class="fa solid fa-arrow-right" onclick="maxAgeIncrease()"></i>
                    </div>



                    <a href="#" class="continue-button" onclick="onStep2Click()">CONTINUE</a>

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
                        <span id="prefcheck" class="prefcheck d-none"role="alert">
                            <p class="text-danger">** Please select atleaast one</p>
                        </span>
                        <label class="main-btn btn btn-secondary">
                            <input type="checkbox" value="intelligent" id="intelligence" name="intelligence"
                                class="item active">Intelligence</input>
                        </label>
                        <label class="main-btn btn btn-secondary">
                            <input type="checkbox" id="goodlooks" name="goodlooks" value="goodlooks" class="item">Good
                            Looks</input>
                        </label>
                        <label class="main-btn btn btn-secondary">
                            <input type="checkbox" id="humor" name="humor" value="humor" class="item">Humor</input>
                        </label>

                        <label class="main-btn btn btn-secondary">
                            <input type="checkbox" id="bedroom_skills" name="bedroom_skills" value="bedroom_skills"
                                class="item active">Great Bedroom Skills</input>
                        </label>

                        <label class="main-btn btn btn-secondary">
                            <input type="checkbox" id="boldness" name="boldness" value="boldness"
                                class="item">Boldness</input>
                        </label>

                        <label class="main-btn btn btn-secondary">
                            <input type="checkbox" id="money" name="money" value="money" class="item">Money</input>
                        </label>


                        <label class="main-btn btn btn-secondary">
                            <input type="checkbox" id="power" name="power" value="power" class="item">Power</input>
                        </label>

                        <label class="main-btn btn btn-secondary">
                            <input type="checkbox" id="flirtatiousness" name="flirtatiousness" value="flirtatiousness"
                                class="item active">Flirtatiousness</input>
                        </label>

                        <label class="main-btn btn btn-secondary">
                            <input type="checkbox" id="wit" name="wit" value="wit"
                                class="item">Wit</input>
                        </label>

                        <label class="main-btn btn btn-secondary">
                            <input type="checkbox" id="endowment" name="endowment" value="endowment"
                                class="item">Endowment</input>
                        </label>
                        <label class="main-btn btn btn-secondary">
                            <input type="checkbox" id="ass" name="ass" value="ass" class="item">Big
                            Ass</input>
                        </label>

                        <label class="main-btn btn btn-secondary">
                            <input type="checkbox" id="petite" name="petite" value="petite"
                                class="item">Petite</input>
                        </label>


                        <label class="main-btn btn btn-secondary">
                            <input type="checkbox" id="big_boobs" name="big_boobs" value="big_boobs" class="item">Big
                            Boobs</input>
                        </label>




                    </div>
                    <a href="#" class="continue-button" onclick="onStep3Click()">CONTINUE</a>

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
                    <span id="subcheck" class="subcheck d-none"role="alert">
                        <p class="text-danger">** Please give us a little decription that will make you stand out</p>
                    </span>
                    <textarea cols="30" rows="10" maxlength="60" name="description" id="description"
                        placeholder="Max 60 characters."></textarea>

                    <div class="info">
                        Try something that sums you up what you want, who you are or just
                        something witty to encourage people to check you out. You're almost
                        done!
                    </div>
                    <a href="#" class="continue-button" onclick="onStep4Click()">CONTINUE</a>

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
                    <p class="small">Your contact info is only made visible to people you match. Otherwise it remains
                        hidden.</p>
                    <span id="contactcheck" class="contactcheck d-none"role="alert">
                        <p class="text-danger">** Please fill this field</p>
                    </span>

                    <div id="spinner" class="spinner-border m-5" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>

                    <input type="text" id="contact" name="contact" placeholder="contact info" />


                    <button href="#" type="button" class="continue-button"
                        onclick="onStep5Click()">CONTINUE</button>

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
                    <p>We have found perfect matches for you. Be prepared to see them and get laid 😍</p>
                    <div class="info">(You will be redirected in <span id="#counter"></span> seconds.)</div>
                </div>
            </form>
        </div>
    </main>
    <!-- Footer -->
    <script src="js/onboard.js"></script>

    </body>

    </html>
@endsection
