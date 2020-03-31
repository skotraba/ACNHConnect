<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'acnh';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo " not connected";
}

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
    $_SESSION["connection"] = $conn;
}

?>