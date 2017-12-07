<?php
    include_once('fonctions.php');
    start_page('Super calculateur');
?>

    <form action="calcul.php" method="post">
        <p><input type="text" name="op1"></p> </br>
        <p><input type="text" name="op2"></p> </br>
    <input checked="checked" type="radio" name="op" value="*"/>*<br/>
    <input type="radio" name="op" value="+"/>+<br/>
    <input type="radio" name="op" value="-"/>-<br/>
    <input type="radio" name="op" value="/"/>/<br/>
        <input type ="submit" value="Calculer" />
        <input type ="reset" value="Effacer" />
    </form>
<?php
    end_page();
?>