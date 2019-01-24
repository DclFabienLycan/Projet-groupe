<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8"/>
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition <b> <i> <u></title>
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
        <h2><xmp>Définition des balises <b>, <i> et <u></xmp></h2>
          <div class="paragraphes">
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
          <p>Les balise  &ltb&gt, &lti&gt et &ltu&gt servent à la mise en forme du texte.</p>
          <p>Bien qu'il soit préférable d'utiliser le CSS, ces balises servent à la mise en forme en gras pour &ltb&gt, en italique pour &lti&gt et souligné pour la balise &ltu&gt.</p>
          <p>Bien évidement, le texte à mettre en forme doit être placé entre une balise d'ouverture et une balise de fermeture.</p>
      </div></div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
<!--Ecrire les balises HTML dans le paragraphe-->
          <p><xmp><b>Par exemple </b>, je peux écrire un <i>texte très très long </i>, juste pour pouvoir mettre les balises, et vous montrer le <u>résultat </u>.</xmp></p>
          <p><xmp>Je trouve cela <b>très drôle</b> de taper du texte <u>pour rien !</u></xmp></p></div>
        <h3>Résultat</h3>
        <div class="paragraphes">
<!--Montrer le résultat de la balise HTML-->
          <p><b>Par exemple</b>, je peux écrire un <i>texte très très long</i>, juste pour pouvoir mettre les balises, et vous montrer le <u>résultat</u>.</p> 
          <p>Je trouve cela <b>très drôle</b> de taper du texte <u>pour rien !</u></p></div>
      </div>
    </main>
    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>