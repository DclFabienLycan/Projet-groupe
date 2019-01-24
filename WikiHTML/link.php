<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition balise <link></title> 
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
        <h2><xmp>Définition de la balise <link></xmp></h2>
        <div class="paragraphes">
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
          <p>L'élément HTML &ltlink&gt définit la relation entre le document courant et une ressource externe.</p>
          <p>Cet élément peut être utilisé pour définir un lien vers une feuille de style ou un cadre de navigation (accéder à la même page dans une langue différente par exemple).</p>
          <p>L'élément &ltlink&gt peut inclure plusieurs attributs, comme par exemple href qui servira à définir l'URL de la ressource liée.</p>
      </div></div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
<!--Ecrire les balises HTML dans le paragraphe-->
          <p><xmp><link  href = "style.css" rel ="stylesheet"></xmp></p></div>
        <h3>Résultat</h3>
        <div class="paragraphes">
          <p><em>Cette balise n'a pas de rendu visuel, les éléments se trouvant dans celle-ci sont cachés.</em> </p></div>
<!--Montrer le résultat de la balise HTML-->
      </div>
    </main>
    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>