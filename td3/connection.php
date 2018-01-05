<?php
ini_set('error_reporting', -1);
ini_set('display_errors', 'on');

$db_name = 'pauletto_bd_php';
$mysql_username = 'pauletto_';
$mysql_password = '123';
$server_name = 'mysql-pauletto.alwaysdata.net';
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name)
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
?>