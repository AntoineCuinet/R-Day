<?php 
$title = 'R&Day';
$title_page = 'Intervenant';
$description_page = "Page de l'intervenant de la journée";
?>
<?php include('header.php'); ?>


<section class="template-section avant-block">
    <div class="template-container">
        <h1 class="template"><?= $title_page; ?></h1>
        <br><br><br><br>

        <article class="article-container-intervenant">
            <img src="../pictures/photo-chercheur.jpg" width="200px" height="200px" alt="photo du conférencier" loading="lazy">
            <h3>Conférencier</h3>
            <p><strong><i>Gilles Simon</i></strong> est professeur à l’université de Lorraine et chercheur au <i>LORIA</i> (Laboratoire lorrain de recherche en informatique et ses applications) à Nancy. Spécialiste de vision par ordinateur et de réalité augmentée, il s'intéresse également aux apports de la modélisation informatique à l'histoire de l'art.</p>
        </article>
        <br><br><br>

        <h3>Les perspectives optiques de Jan van Eyck : quand l'informatique fait parler des tableaux</h3>
        <p class="text">En histoire de l’art, il est communément admis que le peintre flamand Jan Van Eyck (v.1390-1441) ignorait tout de la perspective. La vision par ordinateur appliquée à plusieurs tableaux du maître permet en réalité de démontrer que ce dernier était très en avance sur son temps : il utilisait un dispositif optique de son invention, qui lui permettait de représenter l’espace au plus près de la vision humaine. Cette découverte résout une énigme séculaire de l’histoire de l’art et fait également de Jan Van Eyck un pionnier ignoré de la réalité augmentée.</p>
        <br>

        <h3>Description de la Conférence :</h3>
        <p class="text">Rejoignez-nous pour une exploration fascinante des perspectives optiques dans l'art, présentée par le professeur Gilles Simon, expert en vision par ordinateur et réalité augmentée. Découvrez comment l'application de la vision par ordinateur aux chefs-d'œuvre de Jan Van Eyck révèle une avancée étonnante pour son époque, résolvant une énigme séculaire de l'histoire de l'art et établissant Van Eyck comme un pionnier méconnu de la réalité augmentée.</p>
        <br>

        <h3>Thème :</h3>
        <p class="text">La conférence s'inscrit dans le thème plus large de la réalité virtuelle et de la recherche & développement, explorant les liens entre la vision par ordinateur, l'histoire de l'art et les dispositifs optiques innovants.</p>
        <br>

        <h3>Durée de la Conférence :</h3>
        <p class="text">La conférence durera environ 45 minutes est sera suivie d'une session de questions-réponses.</p>
        <br>

        <h3>Public Cible :</h3>
        <p class="text">Cette conférence s'adresse aux étudiants, au "grand-public" ainsi qu'aux passionnés de réalité virtuelle et de recherche & développement.</p>
        <br>

        <h3>Programme :</h3>
        <br>
        <ul>
            <li>Lieu : Université de Franche-Comté, Besançon</li>
            <li>Date : mercredi 13 mars 2024</li>
            <li>Heure : de 14h à 18h</li>
            <li>De 16h à 17h : Conférence par le professeur Gilles Simon</li>
        </ul>

        <br><br><br>
        <p class="text">Pour plus d'information sur le déroulement de la journée, <a href="./lieu.php">voir la page d'informations</a>.</p>
        <p class="text">Pour toute question, veuillez contacter notre support par Mail à <a href="mailto:tristan.amiotte-suchet@edu.univ-fcomte.fr">contact@rday.fr</a>.</p>
    </div>
</section>
   

<?php include('./footer.php'); ?>
