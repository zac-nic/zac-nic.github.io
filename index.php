<?php
if($_POST["message"]) {
    mail("zacnicbigz@gmail.com", "Form to email message", $_POST["message"], "From: test@gmail.com");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Zachary Nicol-P. | Portfolio</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <meta charset="UTF-8">
        <meta name="description" content="Portfolio professionnel de Zachary - Réalisé dans le cadre du cours de Stage en entreprise - Techniques d'Intégration Multimédia">
        <meta name="author" content="Zachary Nicol-P.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" 
      type="image/png" 
      href="assets/images/icones/icons8-code-100.png">

    </head>
<body>
<h1>Zachary Nicol-P.</h1>
<h2>Développeur Front-End / UI</h2>
<p>Rends le web plus joli, <br/>une ligne de code à la fois</p>
<div class="ligneHorizontale"></div>
<h2>Petite tranche de vie #21</h2>
<p>
    <code>// Texte de présentation</code>
</p>
<a href="assets/images/cv_nicol-prevost_zachary.pdf" download>
    <img src="assets/images/icones/icons8-export-pdf-100.png" alt="cv_nicol-prevost_zachary">
  </a>
  <div class="ligneHorizontale"></div>
  <h2>Quelques réalisations</h2>
<ul class="liste">
    <li class="liste--item"><a href="projets/bataille.html">La Bataille de la Ferme Schrute</a></li>
    <li class="liste--item"><a href="projets/coeuratout.html">Coeur Atout</a></li>
    <li class="liste--item"><a href="projets/dreamtim.html">Agence Web 1Deux3</a></li>
    <li class="liste--item"><a href="projets/elvis.html">Elvis "Le Quiz du Rock N' Roll" Presley</a></li>
    <li class="liste--item"><a href="projets/patate.html">N'oublie pas la patate!</a></li>
    <li class="liste--item"><a href="projets/timcsf.html">Site web de la TIM</a></li>
    <li class="liste--item"><a href="projets/traces.html">Traces - Librairie en ligne</a></li>
</ul>
<div class="ligneHorizontale"></div>
<h2>Écrivez-moi!</h2>
<form method="post" action="index.php">
    <textarea name="message"></textarea>
    <input type="submit">
</form>
</body>
</html>