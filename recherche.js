//Pour rechercher un produit
document.getElementById("search").addEventListener("click", () => {
  let searchInput = document.getElementById("search-input").value;
  console.log(searchInput);

  let elements = document.querySelectorAll(".product-name");

  const cards = document.querySelectorAll(".vente-item");

  //loop through all elements
  elements.forEach((element, index) => {
    //check if text includes the search value
    if (element.innerText.toLowerCase().includes(searchInput.toLowerCase())) {
      cards[index].style.display = "block";
    } else {
      cards[index].style.display = "none";
    }
  });
});
