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
const onNext1Click = (e) => {


  const  sexcheck_null = document.getElementsByClassName("sexcheck_null")[0];

  let sexValue = $("#sex").val();
  if(sexValue.length == ""){   
  sexcheck_null.classList = "sexcheck_null d-inline invalid-feedback text-center";
  return 0;
  }

  form.classList = "d-none";
  form2.classList = "d-block";

};

// Clicking next button on step 2
const onNext2Click = () => {
     const  agecheck_null = document.getElementsByClassName("agecheck_null")[0];
     const  agecheck = document.getElementsByClassName("agecheck")[0];

    let ageValue = $("#age").val();
    if(ageValue.length == ""){   
    agecheck_null.classList = "agecheck_null d-inline invalid-feedback text-center";
    return 0;
    }
    else if(ageValue.length > 2){   
      agecheck.classList = " d-inline invalid-feedback text-center";
      return 0;
      }
   else if (ageValue < 18) {
      agecheck_null.classList = "d-none";     
      agecheck.classList = " d-inline invalid-feedback text-center";
      console.log('problem in if block')
      ageError = false;
      return 0;
    } else {
     
    }

  form2.classList = "d-none";
  form3.classList = "d-block";
};

// Clicking next button on step 3
const onNext3Click = () => {
  /*
  const  locationcheck_null = document.getElementsByClassName("locationcheck_null")[0];
  let locationValue = $("#location").val();
  console.log($("#location").val())
  if(locationValue.length == ""){   
  locationcheck_null.classList = "locationcheck_null d-inline invalid-feedback text-center";
  return 0;
  }
  */
  form3.classList = "d-none";
  form4.classList = "d-block";
};


// Clicking next button on step 4
const onNext4Click = () => {

  const  emailcheck_null = document.getElementsByClassName("emailcheck_null")[0];
  const  emailcheck_format = document.getElementsByClassName("emailcheck_format")[0];
  const  emailcheck = document.getElementsByClassName("emailcheck")[0];

  let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;

 let emailValue = $("#email").val();
 if(emailValue.length == ""){   
 emailcheck_null.classList = "emailcheck_null d-inline invalid-feedback text-center";
 return 0;
 }
 
 else if (!emailValue.match(regex)) {
  emailcheck_null.classList = "d-none";     
  emailcheck.classList = " d-inline invalid-feedback text-center";
  return 
}
 else {
  
 }

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


document.addEventListener("readystatechange", (event) => {
  if (event.target.readyState === "interactive") {
 
  } else if (event.target.readyState === "complete") {
    let loader = document.getElementById('loader')
    loader.classList.add("d-none");
  }
});

//register form validation

$(document).ready(function () {
  $("#signup-form").validate({
    highlight: function(element, errorClass, validClass) {
      $(element).addClass(errorClass).removeClass(validClass);
      $(element.form).find("label[for=" + element.id + "]")
      .addClass(errorClass);
    },
    unhighlight: function(element, errorClass, validClass) {
      $(element).removeClass(errorClass).addClass(validClass);
      $(element.form).find("label[for=" + element.id + "]")
      .removeClass(errorClass);
    },

    rules: {     
      
      jpassword:{
        required: true,
        minlength:2
      },
      password_confirmation:{
        required: true,
        equalTo:'#password'
      },
    },
    messages: {
     
     password_confirmation: {
        equalTo: "Your Passwords dont match"
      },
     
    }
,
    
   
    highlight: function(element) {
      $(element).parent().addClass('has-error');
    },
    unhighlight: function(element) {
      $(element).parent().removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'validation-error-message help-block form-helper bold',
    errorPlacement: function(error, element) {
      if (element.parent('.input-group').length) {
        error.insertAfter(element.parent());
      } else {
        error.insertAfter(element);
      }}


  });
  
})
