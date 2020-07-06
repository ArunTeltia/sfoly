<?php
$host = "localhost";
$userName = "geeksqac_sfoly";
$password = "Springfield18@";
$dbName = "geeksqac_olympiad";
 
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>