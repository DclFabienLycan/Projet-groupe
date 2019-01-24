<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition balise <img></title> 
    <!-- Liens CSS et Police ajoutés pour le CSS--> 
    <link rel="stylesheet" href="css\style.css">  
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Krub" rel="stylesheet">
  </head>

  <body>
    <header>
      <?php include ("header.php"); ?>
    </header>
    <nav>
    <?php include ("menu.php");?>
    </nav>
  
    <main>
      <div id="definition">
        <h2><xmp>Définition de la balise <img></xmp></h2>
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
        <div class="paragraphes">
          <p>L'élément HTML &ltimg&gt permet de représenter une image dans un document.
          Il dispose de plusieurs attributs, tels que src par exemple, qui est obligatoire pour l'élément &ltimg&gt et qui permet de définir la source de l'image.</p></div>
      </div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
<!--Ecrire les balises HTML dans le paragraphe-->
        <div class="code">
          <p><xmp><img src = "https://www.w3schools.com/w3css/img_lights.jpg"/></xmp></p></div>
        <h3>Résultat</h3>
        <div class="paragraphes">
          <img src="https://www.w3schools.com/w3css/img_lights.jpg" height="200px"/></div>
<!--Montrer le résultat de la balise HTML-->
      </div>
    </main>
    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>