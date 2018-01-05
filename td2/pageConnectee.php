<?php
include 'utils.inc.php';
start_page('Page incroyable');
session_start();
if ($_SESSION['login'] != 'ok' && $_SESSION['mdp'] != 'ok')
    die('Erreur d\'authentification, petit hacker');

$rub1 = 'Page de login';
$rub1addr = 'login.php';

?>
    <a href="<?php echo $rub1addr; ?>" target="centre"><?php echo $rub1; ?></a>

<?php
    echo '</br><strong> Le contenu de cette page étant tellement sensible, il faut être connecté pour le voir</strong>';

?>


<?php
end_page();
?>