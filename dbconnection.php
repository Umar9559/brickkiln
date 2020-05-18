<?php

$servername = "localhost";
$username = "id13157794_host";
$password = "Password@1122";
$database = "id13157794_brickkilndb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>