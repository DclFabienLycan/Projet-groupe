<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition <select></title>
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
        <h2><xmp>Définition de la balise <select></xmp></h2>
          <div class="paragraphes">
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
        <p>Les balises &ltselect&gt et &lt/select&gt permettent de créer une liste déroulante avec différentes options, 
           qui sont définies  avec les balises &ltoption&gt et &lt/option&gt.</p>
      </div></div>

      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
        <p><xmp>Voici un exemple de code html contenant les balises <select> et </select> :</xmp></p>
        <p><xmp><select></xmp>
           <xmp><option value="volvo">Volvo</option></xmp>
           <xmp><option value="saab">Saab</option></xmp> 
           <xmp><option value="mercedes">Mercedes</option></xmp>
           <xmp><option value="audi">Audi</option></xmp>
           <xmp></select></xmp> </div>
        </p>
<!--Ecrire les balises HTML dans le paragraphe-->
        <p></p>
        <h3>Résultat</h3>
        <div class="paragraphes">
        <p> Voici le résultat de ces lignes de codes :</p>
        <select>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
          </select> </div>
<!--Montrer le résultat de la balise HTML-->
      </div>
    </main>

    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>