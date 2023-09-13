const slides = document.querySelectorAll(".slide");
const next = document.querySelector("#next");
const prev = document.querySelector("#prev");
const auto = true;
const intervalTime = 5000;
let slideInterval;

const nextSlide = () => {
  //get current class
  const current = document.querySelector(".current");

  //Remove current class
  current.classList.remove("current");
  // check for next slide
  if (current.nextElementSibling) {
    current.nextElementSibling.classList.add("current");
  } else {
    // add current to start
    slides[0].classList.add("current");
  }
  setTimeout(() => current.classList.remove("current"));
};

const prevSlide = () => {
  //get current class
  const current = document.querySelector(".current");

  //Remove current class
  current.classList.remove("current");
  // check for previous slide
  if (current.previousElementSibling) {
    current.previousElementSibling.classList.add("current");
  } else {
    // add current to last
    slides[slides.length - 1].classList.add("current");
  }
  setTimeout(() => current.classList.remove("current"));
};

// Button events

next.addEventListener("click", (e) => {
  nextSlide();
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});

prev.addEventListener("click", (e) => {
  prevSlide();
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});

//Auto slide
if (auto) {
  //Run next slide at intervalle time
  slideInterval = setInterval(nextSlide, intervalTime);
}

// filtre

const toutelementfiltre = document.querySelectorAll(".filtre-element");
const toutbouttonfiltre = document.querySelectorAll(".filtre-bouttons");
console.log(toutbouttonfiltre);
console.log(toutelementfiltre);

toutbouttonfiltre.forEach((btn) => {
  btn.addEventListener("click", () => {
    showFilteredContent(btn);
  });
});
function showFilteredContent(btn) {
  const btnid = btn.id;
  console.log(btn.id);
  toutelementfiltre.forEach((item) => {
    if (item.classList.contains(btn.id)) {
      item.style.display = "block";
    } else {
      item.style.display = "none";
    }
  });
}
