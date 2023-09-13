const current = document.querySelector("#current");
const current2 = document.querySelector("#current2");
const imgs = document.querySelectorAll(".imgs img");
const opacity = 0.6;

//set first image opacity
imgs[0].style.opacity = opacity;

imgs.forEach((img) => img.addEventListener("click", imgClick));

function imgClick(e) {
  // Reset th opacity

  imgs.forEach((img) => (img.style.opacity = 1));

  //change the current image to src of clicked image
  current.src = e.target.src;
  current2.src = e.target.src;

  // add fade in class
  current.classList.add("fade-in");

  //Remove fade in class after 0.5 seconde
  setTimeout(() => current.classList.remove("fade-in"), 500);

  //change the opacity to opacity var

  e.target.style.opacity = opacity;
}
