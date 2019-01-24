<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition <input></title>
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
        <h2><xmp>Définition de la  balise <input></xmp></h2>
        <div class="paragraphes">
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
          <p>La balise input est utilisée pour créer un contrôle intéractif dans un formulaire web, ce qui permet à l'utilisateur de saisir des données.<br>
           Le comportement d'input dépend fortement de la valeur indiquée dans son attribut type.</p></div>
      </div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
<!--Ecrire les balises HTML dans le paragraphe-->
          <p>Il y a plusieurs attributs type pouvant être utilisé avec input, je vais donc en lister quelques un :</p>
            <p><xmp>  
            <ul>
              <li><input id="input1" type="text"></li>
              <li><input id="input2" type="date"></li>
              <li><input id="input3" type="checkbox"></li>
            </ul>
            </xmp></p></div>
        <h3>Résultat</h3>
        <div class="paragraphes">
<!--Montrer le résultat de la balise HTML-->
          <ul>
            <li><input id="input1" type="text"></li>
            <li><input id="input2" type="date"></li>
            <li><input id="input3" type="checkbox"></li>
          </ul></div>
      </div>
    </main>
    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>