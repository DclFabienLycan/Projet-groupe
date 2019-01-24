<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition <a></title> 
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
        <h2><xmp>Définition de la balise <a></xmp></h2>
          <div class="paragraphes">
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
          <p>L'élément &lta&gt (pour ancre ou anchor en anglais) 
              définit un hyperlien vers un autre endroit de la même page ou vers une autre page sur le Web.
            L'élément &lta&gt est souvent accompagné d'attribut comme href, par exemple, qui permet d'indiquer la cible du lien sous forme d'URL.</p>
      </div></div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
<!--Ecrire les balises HTML dans le paragraphe-->
          <p><xmp><a href="index.html"></xmp> 
              <xmp>Cette phrase redirige vers la page d'accueil</xmp>
              <xmp></a></xmp></p></div>
        <h3>Résultat</h3>
        <div class="paragraphes">
        <p><a href="index.html">Cette phrase redirige vers la page d'accueil</a></p></div>
<!--Montrer le résultat de la balise HTML-->
      </div>
    </main>
    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>