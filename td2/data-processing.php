<?php
    include ('utils.inc.php');
    start_page('Data processor')
?>

<?php
    $identifiant = $_POST['identifiant'];
    $sexe = $_POST['sexe'];
    $email = $_POST['mail'];
    $tel = $_POST['tel'];
    $mdp = $_POST['mdp'];
    $pays = $_POST['pays'];
    $action = $_POST['action'];

    if($action == 'mailer')
    {
        $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
        $message .= 'Email : ' . $email . PHP_EOL;
        $message .= 'Identifiant ' . $identifiant . PHP_EOL;
        $message .= 'Mot de passe : ' . $mdp . PHP_EOL;
        $message .= 'Sexe : ' . $sexe . PHP_EOL;
        $message .= 'Num Tel : ' . $tel . PHP_EOL;
        $message .= 'Pays : ' . $pays . PHP_EOL;

        echo $message;
    }
    else {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }
?>

<?php
    end_page();
?>
