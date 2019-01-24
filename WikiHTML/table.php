<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition <table></title>
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
        <h2><xmp>Définition de la balise <table></xmp></h2>
          <div class="paragraphes">
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
        <p>La balise &lttable&gt est un conteneur très utilisé dans les pages web.
           Elle facilite la mise en forme des informations grâce à son découpage en lignes et cellules complètement paramétrables, comme un tableau.
           Cette balise va de pair avec d'autres balises: &lttr&gt &lttd&gt &ltth&gt.
           La première, &lttr&gt sert à définir une ligne, la deuxième &lttd&gt sert à rentrer des données dans une cellule et la troisième &lttr&gt sert à définir une ligne.</p>
      </div></div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
<!--Ecrire les balises HTML dans le paragraphe-->
        <p><xmp><table></xmp>
           <xmp><tr></xmp>
           <xmp><td></xmp>
           Nom 
           <xmp></td></xmp>
           <xmp><td></xmp>
           Prénom
           <xmp></td></xmp>
           <xmp></tr></xmp>
           <xmp></table></xmp></p></div>
        <h3>Résultat</h3>
        <div class="paragraphes">
        <table>
          <tr>
            <td>
              Nom
            </td>
            <td>
                Prénom
            </td>
          </tr>
        </table></div>
<!--Montrer le résultat de la balise HTML-->
      </div>
    </main>
    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>