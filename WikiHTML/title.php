<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition <title></title>   
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
        <h2><xmp>Définition de la balise <title></xmp></h2>
        <div class="paragraphes">
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
        <p>La balise &lttitle&gt est requise dans tous les documents HTML et définit le titre du document.</p>
        <p>Ce titre apparait au niveau de l'onglet de la page web et est très important pour le référencement.</p>
      </div></div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
<!--Ecrire les balises HTML dans le paragraphe-->
        <p>Voici par exemple la ligne de code contenant les balises  title de cette page :</p>
        <p><xmp><title> Définition <title> </title></xmp></p></div>
        <h3>Résultat</h3>
        <div class="paragraphes">
<!--Montrer le résultat de la balise HTML-->
         <p> Regarder l'onglet de cette page.</p>
         <p>Vous devez lire : Définition &lttitle&gt</p></div>
      </div>
    </main>
    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>