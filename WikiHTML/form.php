<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition <form></title> 
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
        <h2><xmp>Définition de la balise <form></xmp></h2>
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
        <div class="paragraphes">
        <p>La balise &ltform&gt est utilisée pour créer un formulaire HTML pour l'entrée utilisateur
        L'élément form peut contenir un ou plusieurs type de forme.</p></div>
      </div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
<!--Ecrire les balises HTML dans le paragraphe-->
          <div class="code">
          <p><xmp><form action="/action_page.php" method="get"></xmp></p>
          <p><xmp>Prénom: <input type="text" name="fname"></xmp></p>
          <p><xmp>Nom: <input type="text" name="lname"></xmp></p>
          <p><xmp><input type="submit" value="Submit"></xmp></p>
          <p><xmp></form></xmp></p></div>
        <h3>Résultat</h3>
        <div class="paragraphes">
<!--Montrer le résultat de la balise HTML-->
          <form action="/action_page.php" method="get">
              First name: <input type="text" name="fname"><br>
              Last name: <input type="text" name="lname"><br>
              <input type="submit" value="Submit">
          </form> </div>
      </div>
    </main>
    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>