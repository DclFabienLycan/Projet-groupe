<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition <meta></title>    
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
        <h2>Définition de la balise < meta ></h2>
        <div class="paragraphes">
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
          <p>Les métadonnées sont des données (informations) sur les données.</p>
          <p>La balise &ltmeta&gt fournit des métadonnées sur le document HTML. Les métadonnées ne seront pas affichées sur la page, mais seront analysables par ordinateur.</p>
          <p>Les méta-éléments sont généralement utilisés pour spécifier la description de la page, les mots-clés, l'auteur du document, la dernière modification et d'autres métadonnées.</p>
          <p>Les métadonnées peuvent être utilisées par les navigateurs (comment afficher du contenu ou recharger une page), les moteurs de recherche (mots-clés) ou d'autres services Web.</p>
          <p>HTML5 a introduit une méthode permettant aux concepteurs Web de prendre le contrôle de la fenêtre d'affichage (la zone visible de l'utilisateur sur une page Web), via la balise &ltmeta&gt (voir l'exemple "Définition de la fenêtre d'affichage" ci-dessous).</p>
      </div></div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
<!--Ecrire les balises HTML dans le paragraphe-->
          <p><xmp><meta charset ="UTF-8"></xmp></p></div>
        <h3>Résultat</h3>
        <div class="paragraphes">
          <p><em>Cette balise n'a pas de rendu visuel, les éléments se trouvant dans celle-ci sont cachés.</em></p>
<!--Montrer le résultat de la balise HTML-->
      </div></div>
    </main>
    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>