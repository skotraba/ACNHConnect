<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'acnh';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST["lusername"]) and isset($_POST["lpassword"])) {
   $myusername = mysqli_real_escape_string($conn, $_POST['lusername']);
   $mypassword = mysqli_real_escape_string($conn, $_POST['lpassword']);
}



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "SELECT username FROM user_login WHERE username = '$myusername' and password = '$mypassword'";
    
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
         $row = $result->fetch_assoc();
         // register a session
         // session_register("myusername");
         // $_SESSION['login_user'] = $myusername;
         $loggedinuser = $row['username'];
         session_start();
         $_SESSION['login_user'] = $loggedinuser;


         header("Location: ../main/index.php ");
    } else {
       echo("User or Password is invalid");
    }
    
 }



?>