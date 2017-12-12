<?php
include 'utils.inc.php';
start_page('Page incroyable');
session_start();
if ($_SESSION['login'] != 'ok' && $_SESSION['mdp'] != 'ok')
    die('Erreur d\'authentification');
?>

<?php
    echo '<strong> Le contenu de cette page étant tellement sensible, il faut être connecté pour le voir</strong>';
?>


<?php
end_page();
?>