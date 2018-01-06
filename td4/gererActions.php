<?php
    require 'classes.php';

$title = $_POST['title'];
$author = $_POST['author'];
$editor = $_POST['editor'];
$pages = $_POST['pagesNb'];
$action = $_POST['action'];

if ($action = 'Ajouter le livre')
{
    $livre = new Book($title,$author,$editor,$pages);


}
elseif ($action = 'Supprimer le livre')
{

}
else
    {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}

?>