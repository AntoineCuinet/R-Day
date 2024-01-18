<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description_page ?? ''; ?>">
    <link rel="shortcut icon" type="image/icon" href="../favicon/icon.png"/>
    <link rel="meta" type="application/json" href="./meta.json">
    <link href="../../style.css" rel="stylesheet" type="text/css">
    <title><?= $title.' - '.$title_page ?? ''; ?></title>
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
                <a href="../../index.php" class="nav-icon" aria-label="Visit homepage" aria-current="page">
                    <img src="../favicon/icon.png" alt="Web site icon">
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
                    <a href="../../index.php" aria-current="page" >Accueil</a>
                    <a href="./lieu.php">Informations</a>
                    <a href="./intervenant.php">Intervenant</a>
                </div>
            </div>
        </nav>
    </head>
    <br><br>
    

    <div class="contenu">
