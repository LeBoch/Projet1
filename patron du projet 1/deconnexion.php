<?php
  
$path_parts = pathinfo($_SERVER['REQUEST_URI']);


    if (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS'])) {
        $protocol = 'https';
    } else {
        $protocol = 'http';
    }

    $url = sprintf(
        '%s://%s%s/index.php',
        $protocol,
        $_SERVER['SERVER_NAME'],
        $path_parts['dirname']
    );
    header( "Refresh:5; url=" .$url , true, 303);
require_once('header2.php');

    session_destroy();
    ?>

Vous avez bien été déconnecté

<?php require_once('footer.php');?>
