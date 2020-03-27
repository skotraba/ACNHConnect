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



?>