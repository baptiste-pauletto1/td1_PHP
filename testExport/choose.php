<?php
    session_start();
    if ($_GET['error'] == 'termError'){
        echo 'term already added !';
    }
    else if ($_GET['error'] == 'emptyList'){
        echo 'can\'t export an empty list !';
    }
?>
<form action="doIt.php" method="post">
    <p> Choose a term
        <select name="terms">
            <option>Salut      </option>
            <option>Bonjour    </option>
            <option>3 ça suffit</option>
            <option>TULIPE     </option>
            <option> JFUIF     </option>
            <option> couillasse</option>
        </select>
    </p>
    <?php
    if($_SESSION['langs'] == '') {?>
        <p> Choose a lang now
            <select name="langs">
                <option>arabe      </option>
                <option>juif       </option>
                <option>oui ?      </option>
            </select>
        </p>
    <?php
    }if (isset($_SESSION['chosenTerms'])){
        foreach ($_SESSION['chosenTerms'] as $key => $value){
            echo $value . '<br>';
        }
    }
    ?>
    <input type="submit" name="action" value="ajouter terme">
    <input type="submit" name="action" value="export now" >
</form>