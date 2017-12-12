<?php
    include 'utils.inc.php';
    start_page('La connexion américaine');
    if (isset($_GET['step']) && $_GET['step'] == 'ERROR')
        echo 'Erreur de connexion, vérifiez vos identifiants de connexion.';

?>
    <form action="test-pass.php" method="post">
        <p> Identifiant <input type="text" name="login"></p>
        <p> Mot de passe <input type="password" name="passwd"></p>
        <p> Connecter <input type="submit" name="action"></p>


<?php
    end_page();
?>