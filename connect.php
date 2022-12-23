<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "seleksi_kkp";

$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);

$mysqli = mysqli_connect($host, $username, $password, $database);

?>