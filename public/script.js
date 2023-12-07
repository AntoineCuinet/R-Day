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



//chronomètre
const text = document.querySelector(".text-chronometre");

function getChrono() {
    const now = new Date().getTime();
    const countdownDate = new Date("March 13, 2024").getTime();
    const distanceBase = countdownDate - now;

    const days = Math.floor(distanceBase / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distanceBase % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distanceBase % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distanceBase % (1000 * 60)) / 1000);

    text.innerText = `${days}d ${hours}h ${minutes}m ${seconds}s`;
}

getChrono();
const countDownInterval = setInterval(() => {
    getChrono();
}, 1000);



//bouton du sroll vers le haut du site
const toTopBtn = document.querySelector(".to-top-btn");
window.addEventListener("scroll", () => {
    if(document.documentElement.scrollTop > window.innerHeight * 0.7)
        toTopBtn.classList.add("active");
    else 
        toTopBtn.classList.remove("active");
});
toTopBtn.addEventListener("click", () => {
    window.scrollTo({
        top: 0
    })
});
