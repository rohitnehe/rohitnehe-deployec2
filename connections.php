<?php
$servername = "php7.benchmarkit.solutions";
$username = "advdemo";
$password = "1P51aZ3TTTettTem";
$dbname = "advdemo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>