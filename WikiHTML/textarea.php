<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition <textarea></title> 
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
        <h2><xmp>Définition de la  balise <textarea></xmp></h2>
          <div class="paragraphes">
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
        <p>La balise &lttextarea&gt définit un contrôle de saisie de texte multiligne.
          Une zone de texte peut contenir un nombre illimité de caractères et le texte est restitué dans une police à largeur fixe (généralement Courier).<br>
          La taille d'une zone de texte peut être spécifiée par les attributs cols et rows, voire mieux; grâce aux propriétés de hauteur et de largeur CSS.</p>
      </div></div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
<!--Ecrire les balises HTML dans le paragraphe-->
        <p><xmp><textarea rows="4" cols="50"></xmp>
          Les D Codeurs Du Lac ont créé cette page html. 
          <xmp></textarea></xmp>
        </p></div>
        <h3>Résultat</h3>
        <div class="paragraphes">
        <textarea rows="4" cols="50">Les D Codeurs Du Lac ont créé cette page html. 
          </textarea>
<!--Montrer le résultat de la balise HTML-->
      </div></div>
    </main>
    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>