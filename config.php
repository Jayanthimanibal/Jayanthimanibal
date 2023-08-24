<?php

$databaseHost = 'localhost';
$databaseName = 'mydb'; 
$databaseUsername = 'root'; 
$databasePassword = '';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
 
 if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

?>