/***** /// landing page js ////*/

const signinPopupBox = document.getElementsByClassName("signinPopupBox")[0]; // Get element of signupBox
const crossMark = document.getElementsByClassName("crossMark")[0]; // Get signup cross

// For forgot Password
const signinContent = document.getElementsByClassName("signin-content")[0];
const forgotPasswordContent = document.getElementsByClassName(
  "forgotPasswordContent"
)[0];

// Clicked Sign in
const onLoginClick = () => {
  signinPopupBox.classList.remove("d-none");
  signinPopupBox.classList.add("d-block");
  signinContent.classList.remove("d-none");
  forgotPasswordContent.classList.add("d-none");
};

// For closing signin box
crossMark.addEventListener("click", () => {
  signinPopupBox.classList.add("d-none");
  signinPopupBox.classList.remove("d-block");
});

const onforgotPasswordClick = () => {
  signinContent.classList.add("d-none");
  forgotPasswordContent.classList.remove("d-none");
};


/***** /// sign up js ////*/

const form = document.getElementsByClassName("form")[0];
const form2 = document.getElementsByClassName("form2")[0];
const form3 = document.getElementsByClassName("form3")[0];
const form4 = document.getElementsByClassName("form4")[0];
const form5 = document.getElementsByClassName("form5")[0];


// Clicking next button on step 1
const onNext1Click = () => {
  form.classList = "d-none";
  form2.classList = "d-block";
};

// Clicking next button on step 2
const onNext2Click = () => {
  form2.classList = "d-none";
  form3.classList = "d-block";
};

// Clicking next button on step 3
const onNext3Click = () => {
  form3.classList = "d-none";
  form4.classList = "d-block";
};

// Clicking next button on step 4
const onNext4Click = () => {
  form4.classList = "d-none";
  form5.classList = "d-block";
};

// Clicking next button on step 5
const onNext5Click = () => {
  //   console.log("clicked1");
};

// Clicked Sign in
const onsigninClick = () => {
  signinPopupBox.classList.remove("d-none");
  signinPopupBox.classList.add("d-block");
  signinContent.classList.remove("d-none");
  forgotPasswordContent.classList.add("d-none");
};


/***** /// activity page js ////*/

const matchedme = document.querySelector(".matchedme-box");
const matches = document.querySelector(".matches-box");
const matchedToggle = document.querySelector(".matchedme");
const matchesToggle = document.querySelector(".matches");

const dropdown = document.getElementsByClassName("dropdown");
console.log(dropdown[0]);

const onMatchesClick = () => {
  matchedme.classList = "d-none";
  matches.classList = "d-block";
  matchesToggle.classList.add("active");
  matchedToggle.classList.remove("active");
};

const onMatchedmeClick = () => {
  matchedme.classList = "d-block";
  matches.classList = "d-none";
  matchedToggle.classList.add("active");
  matchesToggle.classList.remove("active");
};

let count = 0;
const onProfileClick = () => {
  if (count == 0) {
    dropdown[0].classList.remove("d-none");
    dropdown[0].classList.add("d-flex");
    count = 1;
  } else {
    dropdown[0].classList.add("d-none");
    dropdown[0].classList.remove("d-flex");
    count = 0;
  }

  console.log("Profile Clicked");
};


//code by meshkaka1@gmail.com

//loader

window.addEventListener("load", (event) => {
let loader = document.getElementById('loader')
loader.classList.add("d-none");


});
