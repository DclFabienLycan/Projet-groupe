<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition < html ></title>
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
        <h2><xmp>Définition de la balise <html></xmp></h2>
        <div class="paragraphes">
          <!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
          <p>HyperText Markup Language, généralement abrégé par &ltHTML&gt &lt/HTML&gt, est le langage de balisage conçu pour représenter les pages web.
          <p>C'est un langage permettant d'écrire de l'hypertexte, d'où son nom.</p>
      </div></div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
<!--Ecrire les balises HTML dans le paragraphe-->
          <p><xmp><!DOCTYPE HTML></xmp></p>
          <p><xmp><html></xmp></p>
          <p><xmp>  <head></xmp></p>
          <p><xmp>    <title>Title est un titre</title></xmp></p>
          <p><xmp>  </head></xmp></p>
          <p><xmp>  <body></xmp></p>
          <p><pre>    Ceci est un exemple</pre></p>
          <p><xmp>  </body></xmp></p>
          <p><xmp></html></xmp></p></div>
        <h3>Résultat</h3>
        <div class="paragraphes">
        <em>Cette balise n'a pas de rendu visuel, les éléments se trouvant dans celle-ci sont cachés.</em></div>
<!--Montrer le résultat de la balise HTML-->
      </div>
    </main>
    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>