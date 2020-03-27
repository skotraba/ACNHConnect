<?php


include "../connect/connect.php";

if (isset($_POST["message"])) {
    $message = mysqli_real_escape_string($conn, $_POST['message']);
}

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
$user = $_SESSION['login_user'];

if (!isset($user))
{
    echo("user is not set");
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    if (!empty($message)){
        $sql = "INSERT INTO posts (name, message, date)
        VALUES ( '$user', '$message', CURTIME())";
    
        if ($conn->query($sql) === TRUE) {
            header("Location: ../main/index.php ");
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
}



$sql = "SELECT id, name, message, date FROM posts";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
    
    // output data of each row
  
   
    echo
    "
    <div class='container'>
        <div class='card bg-dark p-3 mb-5 text-white shadow-lg rounded'>
            <div class='card-body text-center'>
                <h2> ".$row["name"]." </h2>
                <p class='info'>" . $row["message"]. "</p>
                <small>" . $row["date"]. "</small>
            </div>
        </div>
    </div>
    ";


    }
    
} else {
    echo "0 results";
}


    $conn->close();

?>


