/* 'as' permet de changer le nom, nomDefault est l'export par défaut                                */
/* Ceci permet d'inporter ici les fichiers necessaires afin de couper le code en plusieurs fichiers */
//import nomDefault, {nomExport1 as newName, nomExport2} from "./assets/scripts/nomFichier.js"


/* nav-bar (hamburger) */
const hamburgerToggler = document.querySelector(".hamburger");
const navLinksContainer = document.querySelector(".navlinks-container");

const toggleNav = () => {
    hamburgerToggler.classList.toggle("open");

    const ariaToggle = hamburgerToggler.getAttribute("aria-expanded") === "true" ? "false" : "true";
    hamburgerToggler.setAttribute("aria-expanded", ariaToggle);

    navLinksContainer.classList.toggle("open");
}
hamburgerToggler.addEventListener("click", toggleNav);

new ResizeObserver(entries => { //gérer la transition du menu hamburger
    if(entries[0].contentRect.width <= 800){
        navLinksContainer.style.transition = "transform 0.3s ease-out";
    } else {
        navLinksContainer.style.transition = "none";
    }
}).observe(document.body);
