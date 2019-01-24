<!-- Formulaire -->
<h1>Test de plugin</h1>

<form method="POST" action ="" enctype="multipart/form-data">
    <label for="file">Fichiers: </label>
    <input type="file" name="file"><br>

    <label for="emetteur">Votre e-mail: </label>
    <input id="email" type="mail" name="emetteur"><br>

    <label for="destinataire">E-mail du destinataire: </label>
    <input id="email2" type="mail" name="destinataire"><br>

    <input id="envoyer" type="submit" name="envoyer"><br>
</form>

<?php
    // Méthode pour l'envoi de fichiers
    $mailexp = $_POST['emetteur'];
    $maildest = $_POST['destinataire'];
    
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= "From: ".$mailexp.""."\r\n".'Content-Type: text/plain; charset="utf-8"'."\r\n".'Content-Transfer-Encoding: 8bit';
    
    if(isset($_POST['envoyer'])){
        
        if($_FILES['file']['name'] != ''){
            $uploadedfile = $_FILES['file'];
            $upload_overrides = array( 'test_form' => false );
            
            $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
            $imageurl = "";
            if ( $movefile && ! isset( $movefile['error'] ) ) {
                $imageurl = $movefile['url'];
                echo "url : ".$imageurl;
                
                // création de la table dans la BDD
                global $wpdb;
                $charset_collate = $wpdb->get_charset_collate();
                $fichiers_table_name = $wpdb->prefix . 'fichiers';
                $requete = "CREATE TABLE IF NOT EXISTS $fichiers_table_name (
                idFichier INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                nomFichier VARCHAR(255),
                dateFichier DATE,
                tailleFichier INT,
                lienFichier VARCHAR(255)
                )$charset_collate;";
            
                require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
                dbDelta($requete);
            
                // requête pour l'insertion
                $dateTime = new DateTime();
                $wpdb->insert(
                    $fichiers_table_name,
                    array(
                        'nomFichier' => $_FILES['file']['name'],
                        'dateFichier' => $dateTime->format('Y-m-d H:i:s'),
                        'tailleFichier' => $_FILES['file']['size'],
                        'lienFichier' => $imageurl
                    )
                    );
                $idFichiers = $wpdb->insert_id;   
            } else {
                echo $movefile['error'];
            }
        } 
    }
    $texte = 'Cliquez sur ce lien pour accéder au fichier partagé :  http://localhost/site/SiteNews/Source/index.php/downloads/?idfichier='.$idFichiers;
    // Fonction envoi du mail
    mail($maildest,"Partage de fichiers",$texte, $headers);
    

?>