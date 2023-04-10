
/* Sélection des éléments HTML */
let link = document.getElementById('link')
let burger = document.getElementById('burger')
let ul = document.querySelector('ul')

/* gestionnaire d'événement sur le a#link pour venir changer l'attribution de la classe .open à la ul et au span#burger */
link.addEventListener('click', function(e) {
  e.preventDefault()
  burger.classList.toggle('open')
  ul.classList.toggle('open')
})




const filterContainer = document.querySelector(".gallery-filter");
const galleryItems = document.querySelectorAll(".gallery-item");


filterContainer.addEventListener("click", function (event) {
		if (event.target.classList.contains("filter-button")) {

			// Désactive les boutons actifs 'filter-button'
			filterContainer.querySelector(".active").classList.remove("active");
			// Active les boutons désactivés 'filter-button'
			event.target.classList.add("active");
			const filterValue = event.target.getAttribute("data-filter");
			console.log(filterValue);
			galleryItems.forEach(function (item) {
        if (item.classList.contains(filterValue) || filterValue === "all") {
          item.classList.remove("hide");
          item.classList.add("show");
        } else {
          item.classList.remove("show");
          item.classList.add("hide");
        }
      });
		}
	});