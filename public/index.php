<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Journée R&D du CMI Informatique - 2024">
    <link rel="shortcut icon" type="image/icon" href="./assets/favicon/icon.png"/>
    <link rel="meta" type="application/json" href="./meta.json">
    <link href="style.css" rel="stylesheet" type="text/css">
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;700&display=swap">
    <title>R&Day</title>
</head>
<body>
    <head>
        <!-- bandeau infini -->
        <section class="infinit-part">
            <div class="container">
                <span class="txt">Mercredi <span class="it">13 mars</span> 2024 de 14h à 18h&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;Campus de l'<span class="it">Université de Franche-Comté</span>, hall Propédeutique&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;<span class="it">Gilles Simon</span> donne une conférence à 16h, amphithéâtre Duffieux&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span>
                <span class="txt">Mercredi <span class="it">13 mars</span> 2024 de 14h à 18h&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;Campus de l'<span class="it">Université de Franche-Comté</span>, hall Propédeutique&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;<span class="it">Gilles Simon</span> donne une conférence à 16h, amphithéâtre Duffieux&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span>
            </div>
        </section>


        <!-- menu principal -->
        <nav id="navbar">
            <div class="first-container">
                
                <!-- logo -->
                <a href="./index.php" class="nav-icon" aria-label="Visit homepage" aria-current="page">
                    <img src="./assets/favicon/icon.png" alt="Web site icon">
                    <span>R&Day</span>
                </a>

                <!-- hamburger -->
                <div class="main-navlinks">
                    <button class="hamburger" type="button" aria-label="Toggle navigation" aria-expanded="false">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

                <!-- différents liens dns la navigation -->
                <div class="navlinks-container">
                    <a href="./index.php" aria-current="page" >Accueil</a>
                    <a href="./assets/pages/lieu.php">Informations</a>
                    <a href="./assets/pages/intervenant.php">Intervenant</a>
                </div>
            </div>
        </nav>
    </head>

    <!-- on met ici tout le contenu du site (dans des sections) -->
    <div class="contenu">
        <section class="main-section">
            <img loading="lazy" src="./assets/pictures/bgim.png" alt="bg">
            <div class="home-timer">
                <h2>Votre journée dans</h2>
                <h2 class="text-chronometre-home"></h2>
            </div>
            <div id="scrool-bottom">
                <a href="#scrool-bottom"><img loading="lazy" src="./assets/pictures/arrow-down-circle-outline.svg" alt=""></a>
            </div>
        </section>
        <section class="template-section">
            <div class="template-container">
                <h1 class="template">R&Day</h1>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique vitae amet culpa exercitationem a molestias ipsam impedit facere optio ad.</p>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique vitae amet culpa exercitationem a molestias ipsam impedit facere optio ad.</p>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique vitae amet culpa exercitationem a molestias ipsam impedit facere optio ad. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui enim saepe perferendis repellat quo fugiat impedit aspernatur quas. Ducimus voluptas aperiam omnis reiciendis consequatur quod sapiente, exercitationem atque nihil incidunt odio a consectetur iure suscipit nisi vitae eum voluptatum, repellat veritatis eos fuga! Aliquam sint nulla corrupti recusandae vel autem doloremque vero? Repellendus id iusto, esse exercitationem doloribus cum architecto corrupti, at explicabo voluptatum earum tempore ea itaque corporis magnam, molestias porro. Tenetur nemo fugit ipsa aspernatur quia cum assumenda consectetur explicabo magni tempora error impedit voluptatum suscipit, quasi omnis, quas ducimus dolores asperiores. Magni sed molestiae corrupti tenetur dicta?</p>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique vitae amet culpa exercitationem a molestias ipsam impedit facere optio ad.</p>
                <br>
                <img src="./assets/pictures/image_template.jpeg" alt="image template" width=30% height=30%>
                <br>
                <button>template</button>
            </div>
        </section>
    </div>

    <!-- chronomètre -->
    <div class="chronometre">
        <div class="corner-round"><img src="./assets/pictures/close.svg" alt=""></div>
        <h4>Votre journée dans</h4>
        <h4 class="text-chronometre"></h4>
    </div>
    

    <!-- btn pour remonter en haut du site -->
    <div class="to-top-btn">
        <img src="./assets/pictures/arrow-down-circle-outline.svg" alt="">
    </div>


    <br><br><br><br>
    <footer>
        <div class="contenu-footer">
            <div class="bloc footer-info">
                <h3>Informations</h3>
                <ul>
                    <li><p><span>Lieu:</span> université de Franche-Comté, Besançon</p></li>
                    <li><p><span>Jour:</span> mercredi 13 mars 2024</p></li>
                    <li><p><span>Horaires:</span> de 14h à 18h</p></li>
                </ul>
            </div>

            <div class="bloc footer-sponsor">
                <h3>Nos Sponsors</h3>
                <ul>
                    <li><a href="https://www.univ-fcomte.fr/" target="_blank">Université de Franche-comté</a></li>
                    <li><a href="https://ofni.asso.fr/" target="_blank">Association OFNI</a></li>
                </ul>
            </div>

            <div class="bloc footer-mention">
                <h3>À propos</h3>
                <ul>
                    <li><a href="./assets/pages/mentions.php">Mentions légales</a></li>
                    <li><a href="./assets/pages/cookies.php">Cookies</a></li>
                </ul>
            </div>
        </div>
    </footer>



    <!-- icon ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <!-- script.js -->
    <script src="script.js"></script>
</body>
</html>