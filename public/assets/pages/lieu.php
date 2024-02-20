<?php 
$title = 'R&Day';
$title_page = 'Informations';
$description_page = "Page d'information sur le lieu de la journée";
?>
<?php include('header.php'); ?>


<section class="template-section avant-block">
    <div class="template-container">
        <h1 class="template"><?= $title_page; ?></h1>
        <br><br><br><br><br>
        <h3 class="animbegintext">Lieu de la journée :</h3>
        <br>
        <p class="text animbegintext">Hall Propédeutique, 43 Avenue de l'Observatoire, 25000 Besançon <i>(Des places de parking <strong>gratuites</strong> sont disponible juste à coté, sur le parc de stationnement de l'université)</i></p>
        <p class="text google" >
            <iframe title="google-map: Hall Propédeutique, 25000 Besançon" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1412.2739565775137!2d5.983148565176012!3d47.245598446146495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478d634be6c23c1b%3A0x11d6ff2c8de3bcac!2sHall%20Prop%C3%A9deutique!5e1!3m2!1sfr!2sfr!4v1705593389455!5m2!1sfr!2sfr" height="450" class="google-map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>
        <br><br><br><br>

        <h3>Horaires de la journée :</h3>
        <br>
        <p class="text">Votre journée commence le <strong>mercredi 13 mars</strong> 2024 à 14h et se termine le même jour à 18h.</p>
        <p class="text">Des ateliers, sur le thème de <i>«Le virtuel pour influencer le réel»</i> (sur la réalité virtuelle), serons animés tout le temps de la journée. Une conférence tenue par Monsieur <i>Gilles Simon</i> est prévue à 16h portant sur le thème <i>«Quand l'informatique fait parler les tableaux»</i>, (<a href="./intervenant.php">voir la page sur l'intervenant</a>).</p>

        <br><br><br>
        <h3>Ateliers proposés :</h3>
        <br>
        <p class="text">Des ateliers, animés par les étudiants d'informatiques de l'université, serons présentés tout au long de la journée, en voici la liste :</p>

        <dl>
            <dt>Vision par ordinateur & reconnaissance faciale: Comment l'ordinateur interagit avec notre monde</dt>
            <dd>Venez découvrir l'histoire la reconnaissance faciale et les multiples applications actuelles ou futures influant notre quotidien de la vision par ordinateur.
Nous aurons à disposition des activités de démonstration telles qu'un système simple de reconnaissance faciale d'individus conçue par nos soins.</dd>

            <dt>Découverte de la photogramétrie</dt>
            <dd>La photogrammétrie est une méthode fréquemment utilisée pour obtenir une modélisation tridimensionnelle d'une scène. Elle est régulièrement utilisée au cinéma dans des films comme Matrix. Mais elle est également utilisée pour modéliser des architectures antiques ou modernes à des fins de conservation. 
            Elle permet de générer à l'aide d'un grand nombre de règles mathématiques un plan 3D d'une scène à partir de photos de ce dernier, prises chacune sous un angle différent.</dd>
        </dl>

        <br><br><br>
        <h3>Autres :</h3>
        <br>
        <p class="text">Des écocup (gobelets) aux couleurs de la faculté vous serons offert ainsi qu'un buffet.</p>
        <p class="text">Toute l'équipe organisatrice vous attend avec impatience pour cette journée !</p>
    </div>
</section>


<?php include('./footer.php'); ?>
