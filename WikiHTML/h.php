<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition <h1> à <h6></title> 
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
        <h2><xmp>Définition des balises <h1></h1> à <h6></h6></xmp></title></h2>
        <div class="paragraphes">
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
          <p>Les balises  &lth1&gt&lt/h1&gt  à  &lth6&gt&lt/h6&gt permettent de définir les titres et de les classer par ordre d'importance.</p>
          <p> Visuellement, h1 sera le plus gros  et  h6 le plus petit. </p>
      </div></div>

      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
          <!--Ecrire les balises HTML dans le paragraphe-->
          <p><xmp><h1>This is heading 1</h1></xmp><br>
            <xmp><h2>This is heading 2</h2></xmp><br>
            <xmp><h3>This is heading 3</h3></xmp><br>
            <xmp><h4>This is heading 4</h4></xmp><br>
            <xmp><h5>This is heading 5</h5></xmp><br>
            <xmp><h6>This is heading 6</h6></xmp></p></div>
        <h3>Résultat</h3>
        <div class="paragraphes">
<!--Montrer le résultat de la balise HTML-->
          <h1>This is heading 1</h1>
          <h2>This is heading 2</h2>
          <h3>This is heading 3</h3>
          <h4>This is heading 4</h4>
          <h5>This is heading 5</h5>
          <h6>This is heading 6</h6> 
      </div></div>

    </main>

    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>


