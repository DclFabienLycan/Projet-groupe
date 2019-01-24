<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition  <div></title> 
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
        <h2><xmp>Définition de la balise <div></xmp></title></h2>
          <div class="paragraphes">
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
          <p>Les balises  &ltdiv&gt et &lt/div&gt  permettent de délimiter des sections dans le document html. </p>
          <p> Elles sont très utiles pour la mise en forme de la page avec le CSS car elles permettent de définir des blocs.</p>
              </div> 
      </div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
<!--Ecrire les balises HTML dans le paragraphe-->
          <p><xmp><div style="background-color : lightblue"></xmp> <br>
              <xmp><h4>This is a heading</h4></xmp> <br>
              <xmp><p>This is a paragraph.</p></xmp> <br>
              <xmp></div></xmp>  </p></div>
        <h3>Résultat</h3>
<!--Montrer le résultat de la balise HTML-->
            <div class="paragraphes">
            <div style="background-color:lightblue">
            <h4>This is a heading</h4>
            <p>This is a paragraph.</p></div>
            </div> 
      </div>
    </main>
    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>