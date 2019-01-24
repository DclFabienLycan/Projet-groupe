<!DOCTYPE html >
  <html lang="FR">
    <head>
        <meta charset="utf-8"/>
        <title> Accueil Wiki HTML</title>
        <link rel="stylesheet" href="css\style.css">  
        <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Krub" rel="stylesheet"> 
    </head>
<!-- Ceci est la page d'accueil -->
    <body>
<!-- entête commun à toutes les pages -->       
        <header>
                <?php include ("header.php"); ?>
        </header>
<!-- menu des liens commun à toutes les pages -->
        <nav>
        <?php include ("menu.php");?>
        </nav>
<!-- corps de la page -->
        <main>
            <div id="presentation">
                    <div class="paragraphes">
                <h1>Bienvenue sur notre lexique HTML</h1>
                    <p> Vous désirez connaitre la <strong>définition</strong> d'une balise HTML  et voir un exemple, <br/>
                    cliquez sur le nom de la balise dans le menu ci-dessus.
                    </p></div>
            </div>
        </main> 
<!-- pied de page communs à toutes les pages -->         
        <footer>
        <?php include ("footer.php"); ?>
        </footer>
    </body>
</html>