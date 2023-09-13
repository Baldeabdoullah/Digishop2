const toutelementfiltre = document.querySelectorAll(".filtre-element");
const toutbouttonfiltre = document.querySelectorAll(".filtre-bouttons");

toutbouttonfiltre.forEach((btn) => {
  btn.addEventListener("click", () => {
    showFilteredContent(btn);
  });
});
function showFilteredContent(btn) {
  toutelementfiltre.forEach((item) => {
    if (item.classList.contains(btn.id)) {
      item.style.display = "block";
    } else {
      item.style.display = "none";
    }
  });
}
