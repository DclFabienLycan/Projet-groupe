<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition <pre></title> 
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
        <h2><xmp>Définition de la balise <pre></xmp></h2>
          <div class="paragraphes">
            <!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
          <p>La balise &ltpre&gt définit le texte préformaté</p>
          <p>Le texte d'un élément &ltpre&gt est affiché dans une police à largeur fixe (généralement Courier) et conserve à la fois les espaces et les sauts de ligne.</p>
      </div></div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
<!--Ecrire les balises HTML dans le paragraphe-->
          <p><xmp><pre>Ceci est un exemple       de    texte</pre></xmp></p></div>
        <h3>Résultat</h3>
        <div class="paragraphes">
          <p><pre>Ceci est un exemple       de    texte</pre></p></div>
<!--Montrer le résultat de la balise HTML-->
      </div>
    </main>
    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>