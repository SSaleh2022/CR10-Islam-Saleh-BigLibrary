<?php
$hostName = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "CR10-Islam-Saleh-BigLibrary";


$conn = mysqli_connect($hostName, $userName, $password, $dbName);

if (!$conn) {
    echo "error";
    exit;
}
?>