const step1 = document.querySelector(".field-1");
const step2 = document.querySelector(".field-2");
const step3 = document.querySelector(".field-3");
const step4 = document.querySelector(".field-4");
const step5 = document.querySelector(".field-5");
const step6 = document.querySelector(".field-6");
const step7 = document.querySelector(".field-7");
const step8 = document.querySelector(".field-8");
const step9 = document.querySelector(".field-9");
const step10 = document.querySelector(".field-10");
const finalStep = document.querySelector(".final-step");



// sleep time expects milliseconds
function sleep(time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}

$(document).ready(function () {
  $("#spinner").hide();
});



const onStep1Click = () => {
  step1.style.display = "none";
  step2.style.display = "flex";
};

const onStep2Click = () => {


  step2.style.display = "none";
  step3.style.display = "flex";
};

const onStep3Click = () => {

  const prefcheck = document.getElementsByClassName("prefcheck")[0];

  function error() {
    prefcheck.classList = "prefcheck d-inline invalid-feedback text-center";
    return 0;
  }





  let input1 = $("#wit")
  let input2 = $("#intelligence")
  let input3 = $("#goodlooks")
  let input4 = $("#humor")
  let input5 = $("#bedroom_skills")
  let input6 = $("#boldness")
  let input7 = $("#money")
  let input8 = $("#petite")
  let input9 = $("#ass")
  let input10 = $("#big_boobs")
  let input11 = $("#power")
  let input12 = $("#flirtatiousness")
  let input13 = $("#endowment")


  if ($(input1).is(':checked')) {
    console.log("is checked")
  }

  else if ($(input2).is(':checked')) {
    console.log("is checked")
  }
  else if ($(input3).is(':checked')) {
    console.log("is checked")
  }
  else if ($(input4).is(':checked')) {
    console.log("is checked")
  }
  else if ($(input5).is(':checked')) {
    console.log("is checked")
  }
  else if ($(input6).is(':checked')) {
    console.log("is checked")
  }
  else if ($(input7).is(':checked')) {
    console.log("is checked")
  }
  else if ($(input8).is(':checked')) {
    console.log("is checked")
  }
  else if ($(input9).is(':checked')) {
    console.log("is checked")
  }
  else if ($(input10).is(':checked')) {
    console.log("is checked")
  }
  else if ($(input11).is(':checked')) {
    console.log("is checked")
  }
  else if ($(input12).is(':checked')) {
    console.log("is checked")
  }
  else if ($(input13).is(':checked')) {
    console.log("is checked")
  }
  else {
    console.log("no selection")
    return error()
  }
  step3.style.display = "none";
  step4.style.display = "flex";
};

const onStep4Click = () => {
  let subValue = $("#description").val();
  if (subValue.length == "") {
    subcheck.classList = "subcheck d-inline invalid-feedback text-center";
    return 0;
  }


  step4.style.display = "none";
  step5.style.display = "flex";
};


const onStep5Click = () => {


  let contactValue = $("#contact").val();

  if (contactValue.length == "") {
    contactcheck.classList = "contactcheck d-inline invalid-feedback text-center";
    return;
  }


  $("#spinner").show();

  // Usage!
  sleep(3000).then(() => {
    $("#spinner").hide();
    step5.style.display = "none";
    finalStep.style.display = "flex";
  });



  let count = 10;
  let interval = setInterval(function () {

    count -= 1;

    if (count === 0) {
      clearInterval(interval);
      $("#spinner").show();
      sleep(2000).then(() => {
        $("#spinner").hide();
      });
      $("form").submit();
    }

    document.getElementById("#counter").innerHTML = count

  }, 1000);


};

//

function minAgeIncrease() {
  var minAgeText = document.querySelector(".min-age-text");
  var minAgeValue = parseInt(document.querySelector(".min-age-text").innerHTML);
  var maxAgeValue = parseInt(document.querySelector(".max-age-text").innerHTML);
  if (minAgeValue == 70) return;
  if (minAgeValue == maxAgeValue - 1) return;

  minAgeText.innerHTML = minAgeValue + 1;
}

function minAgeDecrease() {
  var minAgeText = document.querySelector(".min-age-text");
  var minAgeValue = parseInt(document.querySelector(".min-age-text").innerHTML);
  if (minAgeValue == 18) return;

  minAgeText.innerHTML = minAgeValue - 1;
}

function maxAgeIncrease() {
  var maxAgeText = document.querySelector(".max-age-text");
  var maxAgeValue = parseInt(document.querySelector(".max-age-text").innerHTML);

  if (maxAgeValue == 70) return;

  maxAgeText.innerHTML = maxAgeValue + 1;
}

function maxAgeDecrease() {
  var maxAgeText = document.querySelector(".max-age-text");
  var maxAgeValue = parseInt(document.querySelector(".max-age-text").innerHTML);
  var minAgeValue = parseInt(document.querySelector(".min-age-text").innerHTML);

  if (maxAgeValue == 18) return;
  if (maxAgeValue == minAgeValue + 1) return;

  maxAgeText.innerHTML = maxAgeValue - 1;
}

const items = document.querySelectorAll(".item");

for (let i = 0; i < items.length; i++) {
  const element = items[i];
  element.addEventListener("click", function () {
    if (element.className == "item active") element.className = "item";
    else if (element.className == "item") element.className = "item active";
  });
}
