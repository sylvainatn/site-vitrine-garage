var currentPage = window.location.href; // Récupérer l'URL de la page
var footer = document.getElementById("footer");
var btn1 = document.getElementById("btn1");
var btn2 = document.getElementById("btn2");
var btn3 = document.getElementById("btn3");
var btn4 = document.getElementById("btn4");
var btn5 = document.getElementById("btn5");

if (currentPage.indexOf("prestation") !== -1) {

  btn1.classList.remove("active");
  btn2.classList.add("active");

  footer.classList = [];
  footer.classList.add("footer-1");

} else if (currentPage.indexOf("voiture") !== -1) {

  btn1.classList.remove("active");
  btn3.classList.add("active");

  footer.classList = [];
  footer.classList.add("footer-2");

} else if (currentPage.indexOf("plan") !== -1) {

  btn1.classList.remove("active");
  btn4.classList.add("active");

  footer.classList = [];
  footer.classList.add("footer-3");

} else if (currentPage.indexOf("contact") !== -1) {

  btn1.classList.remove("active");
  btn5.classList.add("active");

  footer.classList = [];
  footer.classList.add("footer-4");

} else if (currentPage.indexOf("legal") !== -1) {

  footer.classList = [];
  footer.classList.add("footer-5");

} else if (currentPage.indexOf("") !== -1 || currentPage.indexOf("index") !== -1) {

  btn1.classList.add("active");

  footer.classList = [];
  footer.classList.add("footer-0");
}


// Créez une nouvelle instance de l'objet Date
var date = new Date();

// Obtenez l'année en utilisant la méthode getFullYear()
var annee = date.getFullYear();

// Obtenez l'élément HTML par son identifiant
var messageElement = document.getElementById("annee");

// Modifiez le contenu de l'élément en ajoutant l'année
messageElement.innerHTML = "CHRONOMECA&copy" + " " + annee + "- TOUS DROITS RÉSERVÉS | <a href='?p=legal'>MENTION LEGALES</a>";