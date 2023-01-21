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
