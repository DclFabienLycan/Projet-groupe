<?php

function shortcode_download() {
    include "uploadfile.php";
}

add_shortcode('download', 'shortcode_download');
?>

<!-- Fonction pour la création de page WP -->
<!-- $post = array(
                    'post_status' => 'publish', //Set the status of the new post.
                    'post_type' => 'page', //Sometimes you want to post a page.
                    'post_name' => 'download',
                    'post_title' => 'Fichier partagé par:'.' '.$mailexp,
                    'post_content' => 'veuillez cliquer sur le bouton ci-joint'.'<br>'.'<a href="'.$imageurl.'" download><input type="button" value="download"></a>',
                );
                wp_insert_post($post); -->