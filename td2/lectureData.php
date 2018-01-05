<?php
    include 'utils.inc.php';
    start_page('Lecture du fichier de texte');
?>

<?php
    $file = 'data.txt';
    if(!($file = fopen($file, 'r')))
    {
        echo 'Erreur de lecture du fichier';
        exit();
    }
    echo 'Liste des utilisateurs : <br/>';
    $cpt = 1;
    while($line = fgets($file, 255))
    {
        echo 'Utilisateur n ' . $cpt . ' : ' . $line . '<br/>';
        ++$cpt;
    }
    fclose($file);
?>

<?php
    end_page();
?>