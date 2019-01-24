<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition <!...></title>
    <link rel="stylesheet" href="css\style.css">  
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Krub" rel="stylesheet">     
  </head>

  <body>
    <header>
      <?php include ("header.php");?>
    </header>
    <nav>
      <?php include ("menu.php");?>
    </nav>
  
    <main>
      <div id="definition">
        <h2>Définition de la balise &lt!--- ... ---&gt</h2>
        <div class="paragraphes">
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
          <p>En HTML5, les commentaires indiqués entre les balises &lt!--- ... ---&gt ne s’affichent pas dans le navigateur.</p>
          <p>Ils sont insérés dans le code source et servent de repères. Les commentaires peuvent tenir sur plusieurs lignes.</p></div> 
      </div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
<!--Ecrire les balises HTML dans le paragraphe-->
          <p><xmp><!---Ceci est un exemple---></xmp></p></div>
          <h3>Résultat</h3>
          <div class="paragraphes">
          <p><em>Cette balise n'a pas de rendu visuel, les éléments se trouvant dans celle-ci sont cachés.</em></p>
<!--Montrer le résultat de la balise HTML--></div>
      </div>
    </main>
    <footer>
      <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>