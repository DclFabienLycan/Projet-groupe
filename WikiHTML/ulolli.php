<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
<!--Rajouter le nom de la balise à la place du mot "balise" dans le titre-->
    <title>Définition <ul> <ol> <li></title>
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
        <h2>Définition des balises ul ol et li</h2>
        <div class="paragraphes">
<!--Mettre la définition de la balise présentée entre les balises paragraphe <p>-->
        <p>Les balises ol et ul servent à créer des listes odonnées (pour &ltol&gt) et désordonnées (pour &ltul&gt).<br> 
           La balise &ltli&gt sert à représenter un élément dans une liste, donc elle doit être contenu dans un élément parent (ol ou ul).</p>
      </div></div>
      <div id="exemple">
        <h2>Exemple</h2>
        <h3>HTML</h3>
        <div class="code">
<!--Ecrire les balises HTML dans le paragraphe-->
        <p><xmp><ol></xmp>
             <xmp><li>Préparer la table</li></xmp>
             <xmp><li>Mettre les assiettes</li></xmp>
           <xmp></ol></xmp>

           <xmp><ul></xmp>
             <xmp><li>Préparer la table</li></xmp>
             <xmp><li>Mettre les assiettes</li></xmp>
           <xmp></ul></xmp></p></div>
        <h3>Résultat</h3>
        <div class="paragraphes">
<!--Montrer le résultat de la balise HTML-->
        <ol>
            <li>Préparer la table</li>
            <li>Mettre les assiettes</li>
        </ol>
        <ul>
            <li>Préparer la table</li>
            <li>Mettre les assiettes</li>
        </ul>
        <p><em>Du coup, on remarque bien la liste ordonnée (avec la suite numérotée), et la liste désordonnée avec les puces.</em></p>
      </div></div>
    </main>
    <footer>
    <?php include ("footer.php"); ?>
    </footer> 
  </body>
</html>