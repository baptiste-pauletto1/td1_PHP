<?php
    include ('utils.inc.php');
    start_page('Data processor')
?>

<?php
    require 'connection.php';

    //$today = date('Y-m-d'); façon de formatter la date en php

    $identifiant = $_POST['identifiant'];
    $sexe = $_POST['sexe'];
    $email = $_POST['mail'];
    $tel = $_POST['tel'];
    $mdp = $_POST['mdp'];
    $pays = $_POST['pays'];
    $action = $_POST['action'];



    if($action == 'mailer')
    {
        $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL ;
        $message .= 'Identifiant : ' . $identifiant . PHP_EOL ;
        $message .= 'Sexe : ' . $sexe . PHP_EOL ;
        $message .= 'Email : ' . $email . PHP_EOL ;
        $message .= 'Mot de passe : ' . PHP_EOL . $mdp ;
        $message .= 'Téléphone : ' . PHP_EOL . $tel ;
        $message .= 'Pays : ' . PHP_EOL . $pays ;

        $messagebienvenue = "Bienvenue $identifiant ! Votre inscription a correctement été enregistrée ! ";

        echo '<strong>BONJOUR !</strong><br/>';
        echo $messagebienvenue;

        mail('bablebolosse@yahoo.fr','test',$message);

        $query = 'INSERT INTO USER (PSEUDO, MDP, MAIL, SEXE, PAYS, TEL, DATE) VALUES (\'' . $identifiant . '\', \''
        . $mdp . '\',\'' . $email . '\',\'' . $sexe . '\',\'' . $pays . '\',\'' . $tel . '\', NOW())';

        if(!($dbResult = mysqli_query($conn, $query)))
        {
            echo 'Erreur dans requête<br />';
            // Affiche le type d'erreur.
            echo 'Erreur : ' . mysqli_error($conn) . '<br/>';
            // Affiche la requête envoyée.
            echo 'Requête : ' . $query . '<br/>';
            exit();
        }
    }
    elseif($action == 'rec')
    {
        $file = 'data.txt';
        if(!($file = fopen($file,'a'))){
            echo 'Une erreur est survenue dans l\'ouverture du fichier';
            exit();
        }
        fputs($file, 'Identifiant :' . $identifiant . ', Email : ' . $email . PHP_EOL);
        fclose($file);
        echo '<strong> FELICITATIONS VOUS ETES BIEN ENREGISTRE DANS LE FICHIER youhou ! </strong>';
    }
    else {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }
?>

<?php
    end_page();
?>
