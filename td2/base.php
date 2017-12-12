<?php /*
$link = mysqli_connect('mysql-pauletto.alwaysdata.net', 'pauletto_', '123')
    or die('Pb de connexion au serveur: ' . mysqli_connect_error());
mysqli_select_db($link, 'pauletto_bd_php') or die ('Pb de sélection BD : ' . mysqli_error($link));
*/
require 'connection.php';

$query = 'SELECT ID, MAIL, DATE FROM USER WHERE ID = 1';

if(!($dbResult = mysqli_query($conn, $query))) {
    echo 'Erreur de requête<br/>';
    // Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($conn) . '<br/>';
    // Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}
while($dbRow = mysqli_fetch_assoc($dbResult))
{
    echo $dbRow['ID'] . '<br/>';
    echo $dbRow['MAIL'] . '<br/>';
    echo date('d.m.Y', strtotime($dbRow['DATE']));
    echo '<br/><br/>';
}

?>