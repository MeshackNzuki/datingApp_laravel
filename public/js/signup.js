const form = document.getElementsByClassName("form")[0];
const form2 = document.getElementsByClassName("form2")[0];
const form3 = document.getElementsByClassName("form3")[0];
const form4 = document.getElementsByClassName("form4")[0];
const form5 = document.getElementsByClassName("form5")[0];

const signinPopupBox = document.getElementsByClassName("signinPopupBox")[0]; // Get element of signupBox
const crossMark = document.getElementsByClassName("crossMark")[0]; // Get signup cross

// For forgot Password
const signinContent = document.getElementsByClassName("signin-content")[0];
const forgotPasswordContent = document.getElementsByClassName(
  "forgotPasswordContent"
)[0];
console.log(signinContent);
console.log(forgotPasswordContent);

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

// For closing signin box
crossMark.addEventListener("click", () => {
  signinPopupBox.classList.add("d-none");
  signinPopupBox.classList.remove("d-block");
});

const onforgotPasswordClick = () => {
  signinContent.classList.add("d-none");
  forgotPasswordContent.classList.remove("d-none");
};
