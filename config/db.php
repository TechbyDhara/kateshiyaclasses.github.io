<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "kateshiyaclassesdb";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
die("Database Connection Failed");
}

?>