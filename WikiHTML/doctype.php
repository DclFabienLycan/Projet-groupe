<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition balise <!DOCTYPE></title>
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
        <h2><xmp>Définition de la balise <!DOCTYPE></xmp></h2>
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
        <div class="paragraphes">
        <p>Un doctype (contraction de l'anglais document type, littéralement « type de document ») est une instruction au début des documents SGML et XML (comme les pages web) spécifiant sa règle de syntaxe.<br>
          Par exemple, pour le HTML5 le DOCTYPE en début de document spécifiera DOCTYPE HTML.
        </p></div>
      </div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
<!--Ecrire les balises HTML dans le paragraphe-->
          <p><xmp><!DOCTYPE html></xmp> <br>
          <xmp><html></xmp> <br>
          <xmp></html></xmp></p></div>
        <h3>Résultat</h3>
        <div class="paragraphes">
        <em>Cette balise n'a pas de rendu visuel, les éléments se trouvant dans celle-ci sont cachés.</em ></div>
<!--Montrer le résultat de la balise HTML-->
      </div>
    </main>
    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>