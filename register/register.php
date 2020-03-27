<?php

$username1 = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if ($password1 != $password2) {
    echo "Passwords do not match";
    die();
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'acnh';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "INSERT INTO user_login (username, password)
    VALUES ( '$username1', '$password1')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: ../main/index.php ");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}



// $sql = "SELECT id, username, password FROM user_login";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "<br> id: " . $row["id"]. " Name: " . $row["username"]. " password " . $row["password"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }


?>