<?php
    include_once('fonctions.php');
    start_page('Super calculateur');
    $operateurs = '*+-/';
?>

    <form action="calcul.php" method="post">
        <p><input type="text" name="op1"></p>
        <p><input type="text" name="op2"></p>
        <?php
        for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
        {
            echo '<input ';
            if($cpt == 0)
            {
                echo 'checked="checked" ';
            }
            echo 'type="submit" name="action" value="' . $operateurs[$cpt] . '"/> ' . "\n";
            }
        ?>
        <input type ="reset" value="Effacer" />
    </form>


<?php
    end_page();
?>