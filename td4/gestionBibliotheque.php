<?php
    include 'utils.inc.php';
    start_page('Les livres c rigolo');
    session_start();
?>
<h1> Gestionnaire de Bibliothèque </h1>
<p>Ici se trouve les livres de la bibliothèque :</p>
</br>
<p>Ajouter un livre :</p>

<form action="gererActions.php" method="post">
    <p>Titre du livre : <input type="text" name="title"></p>
    <p>Auteur du livre : <input type="text" name="author"></p>
    <p>Editeur du livre : <input type="text" name="editor"></p>
    <p>Nombre de pages : <input type="text" name="pagesNb"></p>
    <input type="submit" name="action" value="Ajouter le livre">
    <input type="submit" name="action" value="Supprimer le livre">
</form>
<p> Pour supprimer un livre, entrez uniquement son titre.</p>
<?php
    end_page();
?>
