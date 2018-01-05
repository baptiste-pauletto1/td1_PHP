<?php
    include 'utils.inc.php';
    start_page('Tableau des utilisateurs');
    require 'connection.php';

    $query = 'SELECT * FROM USER';
    $queryDate = 'SELECT DATE, COUNT(*) as nb FROM USER GROUP BY DATE';
    $queryPays = 'SELECT PAYS, COUNT(*) as nb FROM USER GROUP BY PAYS';
    $cptUsers = 'SELECT COUNT(*) FROM USER';
    $cptDate = 'SELECT COUNT(DISTINCT DATE) FROM USER';
    $cptPays = 'SELECT COUNT(DISTINCT PAYS) FROM USER';

?>
<body>
<style>
    #users{
        border: 1px solid #ddd;
        border-collapse:collapse;
    }
    #users th{
        background-color: lightgreen;
    }
    #users td{
        padding: 5px;
        border: 1px solid #d3d3d3;
    }
    #dates{
        border: 2px solid #d3d3d3;
        border-collapse: collapse;
    }
    dates th{
        background: lightgreen;
    }
    dates td{
        padding: 8px;
        border: 1px solid #d3d3d3;
    }
</style>
<table id="users" width="100%">
    <tr>
        <th>Identifiant</th>
        <th>Email</th>
        <th>Pays</th>
        <th>Date</th>
        <th>Nombre de connexions</th>
    </tr>
    <?php
    if(!($dbResult = mysqli_query($conn, $query)))
    {
        echo 'Erreur dans requête<br/>';
        // Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($conn) . '<br/>';
        // Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    }
    $compteur = mysqli_query($conn,$cptUsers);
    $dbCompteur = mysqli_fetch_assoc($compteur);
    for ($i = 0; $i<$dbCompteur['COUNT(*)']; ++$i)
    {
        $dbRow = mysqli_fetch_assoc($dbResult);
        echo '<tr style="background-color:' . use_color() .'">' .  '<td>' . $dbRow['PSEUDO'] . '</td>';
        echo '<td>' . $dbRow['MAIL'] . '</td>';
        echo '<td>' . $dbRow['PAYS'] . '</td>';
        echo '<td>' . $dbRow['DATE'] . '</td>';
        echo'<td><img src="rg.jpg" height="5" width="' . 50 * $dbRow['CPTCONNEXIONS'] . '"></td></tr>';
    }
    ?>
</table>

<table id="dates" width="100%">
    <tr style= <?php echo '"background-color:' . use_color() . '"' ?>>
        <th>Nombre d'inscriptions</th>
        <?php
        $dbResult2 = mysqli_query($conn, $queryDate);
        $compteurDate = mysqli_query($conn,$cptDate);
        $dbCompteurDate = mysqli_fetch_assoc($compteurDate);
        for ($j = 0; $j<$dbCompteurDate['COUNT(DISTINCT DATE)']; ++$j) {
            $dbRow2 = mysqli_fetch_assoc($dbResult2);
            echo '<td><img src="rg.jpg" width="50" height="' . 5 * $dbRow2['nb'] . '"></td>';
        }
        echo '</tr><tr style= "background-color:' . use_color() . '">';
        echo '<th>Date</th>';
        $dbResult3 = mysqli_query($conn, $queryDate);
        for ($k = 0; $k<$dbCompteurDate['COUNT(DISTINCT DATE)']; ++$k) {
            $dbRow3 = mysqli_fetch_assoc($dbResult3);
            echo '<td>' . $dbRow3['DATE'] . '</td>';
        }
        echo '</tr>';
    ?>
</table>

<table id="pays" width="100%">
    <tr style= <?php echo '"background-color:' . use_color() . '"' ?>>
        <th>Nombre d'inscriptions</th>
        <?php
        $dbResultPaysInscrits = mysqli_query($conn, $queryPays);
        $compteurPays = mysqli_query($conn,$cptPays);
        $dbCompteurPays = mysqli_fetch_assoc($compteurPays);
        for ($j = 0; $j<$dbCompteurPays['COUNT(DISTINCT PAYS)']; ++$j) {
            $dbRowPaysInscrits = mysqli_fetch_assoc($dbResultPaysInscrits);
            echo '<td><img src="rg.jpg" width="50" height="' . 5 * $dbRowPaysInscrits['nb'] . '"></td>';
        }
        echo '</tr><tr style= "background-color:' . use_color() . '">';
        echo '<th>Pays</th>';
        $dbResultPays = mysqli_query($conn, $queryPays);
        for ($k = 0; $k<$dbCompteurPays['COUNT(DISTINCT PAYS)']; ++$k) {
            $dbRowPays = mysqli_fetch_assoc($dbResultPays);
            echo '<td>' . $dbRowPays['PAYS'] . '</td>';
        }
        echo '</tr>';
        ?>
</table>
<img src="image.php"/><br/>
</body>
<?php
    end_page();
?>
