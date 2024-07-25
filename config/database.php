<?php
$servername = "localhost";
$username = "root"; 
$password = "your_password"; 
$dbname = "bdturman";
$port = 3305; 

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

