<?php
    include 'utils.inc.php';
    require 'classes.php';
    start_page('Les livres c rigolo');
    session_start();

?>
<h1> Gestionnaire de Bibliothèque </h1>

<p> Créez tout d'abord une bibliothèque : </p>
<form action="gererActions.php" method="post">
    <p>Nom de la bibliothèque : <input type="text" name="name"></p>
    <p>Adresse : <input type="text" name="address"></p>
    <p>Nombre de livres max : <input type="text" name="max"></p>
    <input type="submit" name="action" value="Creation">
</form>
<?php if (isset($_SESSION['library'])) {
    echo '<h2>' . $_SESSION['library']->getName() . '</h2>' . '<h4>' . ' se trouvant à ' . $_SESSION['library']->getAddress() . ' peut contenir ' . $_SESSION['library']->getMax() . ' livres !</h4>';

    echo '<p>Votre bibliotèque ' . $_SESSION['library']->getName() . ' contient ces livres : </p>';

    $_SESSION['library']->afficherLivres();
}
?>
</br>
<p>Ajouter un livre :</p>

<form action="gererActions.php" method="post">
    <p>Titre du livre : <input type="text" name="title"></p>
    <p>Auteur du livre : <input type="text" name="author"></p>
    <p>Editeur du livre : <input type="text" name="editor"></p>
    <p>Nombre de pages : <input type="text" name="pagesNb"></p>
    <input type="submit" name="action" value="Ajouter le livre">
    <input type="submit" name="action" value="Supprimer le livre">
    <input type="submit" name="action" value="Oter les doublons">
    <input type="submit" name="action" value="Tri par auteur">
</form>
<?php
    end_page();
?>
