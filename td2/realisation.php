<?php
    include 'utils.inc.php';
    start_page('Page sympathique');
?>
    <form action="data-processing.php" method="post">
        <p> Identifiant <input type="text" name="identifiant"></p>
        <p> Civilité : <input type="radio" name="sexe" value="Homme"> Homme
            <input type="radio" name="sexe" value="Femme"> Femme </p>
        <p> Mail <input type="email" name="mail"></p>
        <p> Mot de passe <input type="password" name="mdp"></p>
        <p> Répetez le mot de passe <input type="password" name="mdpverif"></p>
        <p> Téléphone <input type="n" name="tel"></p>
        <p> Pays <select name="pays">
                <optgroup label="Europe">
                    <option value="France">France</option>
                    <option value="Allemagne">Allemagne</option>
                    <option value="Angleterre">Angleterre</option>
                </optgroup>
                <optgroup label="Afrique">
                    <option value="Ouagadougou">Ouagadougou</option>
                    <option value="Tunisie">Tunisie</option>
                </optgroup>
                <optgroup label="Asie">
                    <option value="Vietnam">Vietnam</option>
                    <option value="Chine">Chine</option>
                </optgroup>
            </select></p>
        <p> Conditions générales d'utilisation <input type="checkbox" name="cgu" REQUIRED></p>
        <p> Envoyer le formulaire <input type="submit" name="action" value="mailer"></p>

    </form>

<?php
    end_page();
?>
