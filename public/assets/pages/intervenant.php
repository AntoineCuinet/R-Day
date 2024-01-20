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
            <img src="../pictures/image_template.jpeg" width="200px" height="200px" alt="photo du conférencier" loading="lazy">
            <h3>Conférencier</h3>
            <p>Infos conférencier(Simon) + biographie de lui de ce qu'il fait...</p>
        </article>

        <p class="text">Sur quoi porte la conférence + le thème, l'heure, la durée, le puclic cible...</p>
    </div>
</section>
   

<?php include('./footer.php'); ?>
