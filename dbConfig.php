<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'kksp';
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$conn){
    die("Database connection failed: " . mysqli_connect_error());
}
?>