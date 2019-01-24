<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition <hr></title>
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
        <h2>Définition de la  balise < hr ></h2>
        <div class="paragraphes">
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
          <p>La balise &lthr&gt définit une rupture thématique dans une page HTML (par exemple, un changement de sujet).</p>
          <p>L'élément &lthr&gt est utilisé pour séparer le contenu (ou définir un changement) dans une page HTML.</p>
      </div></div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
          <p><xmp><p>ici se trouve mon premier paragraphe</p></xmp></p>

            <xmp><hr></xmp>

          <p><xmp><p>ici se trouve mon deuxième paragraphe</p></xmp></p></div>
<!--Ecrire les balises HTML dans le paragraphe-->
        <h3>Résultat</h3>
        <div class="paragraphes">
          <p>ici se trouve mon premier paragraphe</p>

          <hr>

          <p>ici se trouve mon deuxième paragraphe</p>
<!--Montrer le résultat de la balise HTML-->
      </div></div>
    </main>
    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>