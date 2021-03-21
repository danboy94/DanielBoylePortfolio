<?php 

$DBHost = "localhost";
$DBUser = "root";
$DBPass = "Borderlands23!";
$DBName = "phptutorial";

$conn = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName);

if (!$conn) {

    die("Database connection failed");
    
}

?>