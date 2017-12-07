<?php
    include 'utils.inc.php';
    start_page('Page sympathique');
?>
    <form action="data-processing.php" method="post">
        <p> Identifiant <input type="text" name="identifiant"></p>
        <p> Civilité : <input type="radio" name="sexe"> Homme
            <input type="radio" name="sexe"> Femme </p>
        <p> Mail <input type="email" name="mail"></p>
        <p> Mot de passe <input type="password" name="mdp"></p>
        <p> Répetez le mot de passe <input type="password" name="mdpverif"></p>
        <p> Téléphone <input type="n" name="tel"></p>
        <p> Pays <select id="pays">
                <option value="france">France</option>
                <option value="ouagadougou">Ouagadougou</option>
                <option value="Angleterre">Angleterre</option>
            </select></p>
        <p> Conditions générales d'utilisation <input type="text" name="cgu"></p>
        <p> Envoyer le formulaire <input type="submit" name="action" value="mailer"></p>

    </form>

<?php
    end_page();
?>
