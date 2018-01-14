<?php
require 'classes.php';
session_start();

//LIB
$name = $_POST['name'];
$address = $_POST['address'];
$max = $_POST['max'];

//BOOKS
$title = $_POST['title'];
$author = $_POST['author'];
$editor = $_POST['editor'];
$pages = $_POST['pagesNb'];
$action = $_POST['action'];


if ($action == 'Ajouter le livre')
{
    $livre = new Book($title,$author,$editor,$pages);
    $_SESSION['library']->ajouterLivre($livre);
    header('Location: gestionBibliotheque.php');
}
if ($action == 'Ajouter a la deuxieme bibliotheque')
{
    $livre = new Book($title,$author,$editor,$pages);
    $_SESSION['library2']->ajouterLivre($livre);
    header('Location: gestionBibliotheque.php');
}
elseif($action == 'Creation')
{
    $library = new Library($name,$address,$max);
    $_SESSION['library'] = $library;
    header('Location: gestionBibliotheque.php');
}
elseif ($action == 'Supprimer le livre')
{
    $livre = new Book($title,$author,$editor,$pages) ;
    $book = array_search($livre,$_SESSION['library']->getBooks());
    $_SESSION['library']->enleverLivre($book);
    header('Location: gestionBibliotheque.php');
}
elseif ($action == 'Oter les doublons')
{
    $_SESSION['library']->supprimerDoublons();
    header('Location: gestionBibliotheque.php');

}
elseif ($action == 'Tri par auteur')
{
    $_SESSION['library']->triParAuteur();
    header('Location: gestionBibliotheque.php');

}
elseif ($action == 'Deuxième bibliothèque')
{
    $library = new Library($name,$address,$max);
    $_SESSION['library2'] = $library;
    header('Location: gestionBibliotheque.php');
}
else
    {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}

?>