@extends('layouts.app')

@section('content')

    <body>
        <!-- Main Section -->
        <Section class="container">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="row mt-5">
                        <div class="col-lg-6 py-5">
                            <div class="row hero-content">

                                <div class="fs-2 fw-bold hero-title">Love is Patient. Love is Kind. Love is Here.</div>
                                <div class="fs-6 text-secondary hero-description">


                                    <p>Sign up today and connect with the largest community of Kenyan singles online.</p>

                                </div>
                                <div class="main-btn-box row px-5">
                                    <a href="/signup" role="button"
                                        class="main-btn btn btn-primary mt-4 px-5 py-2 rounded-pill fw-bold">JOIN</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-5">
                            <img src="imgs/love-birds.png" class="img-fluid" alt="love birds" />
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
                            <h4 class="fw-bold">The Best Kenyan Dating Site</h4>
                            <p>Our only focus is on helping Kenyan men and women find a loving, God-centered relationship
                                built on mutual faith and love. Discover why so many Kenyan singles find love here.</p>
                        </div>

                        <!-- Why-us-advantages -->

                        <!-- Advantage -right -->
                        <div class="why-us-adv row my-4 m-3 p-3">
                            <div class="col-lg-6">
                                <img src="imgs/email.png" class="img-fluid" alt="confidentiality" />
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
                                <img src="imgs/active-user.png" class="img-fluid" alt="verified users" />
                            </div>
                        </div>
                        <div class="row why-us-top text-center m-3 p-3">
                            <h4 class="fw-bold">LuckyMate Is The Biggest Singles Site Around Right Now!</h4>
                            <p>Looking to meet serious Kenyan singles? We’re helping Kenyan singles to find long-lasting
                                love. Unlike other free dating apps in Kenya, LuckyMate puts your safety first. Maybe your
                                love is just a few taps away! Join the best dating app in Kenya today and find your lasting
                                love!</p>
                            <div class="main-btn-box row px-5">
                                <a href="/signup" role="button"
                                    class="main-btn btn btn-primary mt-4 py-3 rounded-pill fw-bold">CREATE
                                    PROFILE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
