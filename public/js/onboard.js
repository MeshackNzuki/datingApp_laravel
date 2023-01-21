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

const onStep1Click = () => {
  step1.style.display = "none";
  step2.style.display = "flex";
};

const onStep2Click = () => {
  step2.style.display = "none";
  step3.style.display = "flex";
};

const onStep3Click = () => {
  step3.style.display = "none";
  step4.style.display = "flex";
};

const onStep4Click = () => {
  step4.style.display = "none";
  step5.style.display = "flex";
};

const onStep5Click = () => {
  step5.style.display = "none";
  finalStep.style.display = "flex";
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
