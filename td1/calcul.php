<?php
    include_once('fonctions.php');
    start_page('ici, ça calcule');
?>

<?php
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $action = $_POST['action'];

    echo "$op1 $action $op2 = ";


    if('*' == $action)
    {
        $resultat = $op1 * $op2;
    }
    elseif('+' == $action)
    {
        $resultat = $op1 + $op2;
    }
    elseif('-' == $action)
    {
        $resultat = $op1 - $op2;
    }
    elseif('/' == $action)
    {
        if ($op2 == 0) {
            echo '<strong>tu déconnes Billy, on divise pas par 0 !</strong></br>';
        }
        else
        $resultat = $op1 / $op2;
    }
    else
    {
        echo '<br/><strong>opérateur ' . $action . ' non géré </strong>';
    }

    echo $resultat;

?>



<?php
    end_page();
?>