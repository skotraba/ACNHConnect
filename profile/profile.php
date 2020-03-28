<?php
include '../connect/connect.php';


function createProfile() {

    if (isset($_SESSION['login_user'])) {

        $user = $_SESSION['login_user'];
    }

    if (!isset($user))
    {
        $_SESSION['profile_not_logged_in'] = "true";
        header("Location: ../main/index.php ");
    }


    if (isset($_POST['townsname']) && isset($_POST['fruits']) && isset($_POST['flowers'])) {
        
        $townsname = $_POST['townsname'];
        $fruits = $_POST['fruits'];
        $flowers = $_POST['flowers'];

        $sql = "INSERT INTO profile (user, townsname, fruits, flowers)
        VALUES ( '$user', '$townsname', '$fruits', '$flowers')";

        $conn = $_SESSION["connection"];

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: ../main/index.php ");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

function viewProfile() {
    $conn = $_SESSION["connection"];
    $sql = "SELECT user, townsname, fruits, flowers FROM profile";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {
        
        // output data of each row
    
        echo
        "
        <div class='container'>
            <div class='card bg-dark p-3 mb-5 text-white shadow-lg rounded'>
                <div class='card-body text-center'>
                    <h2> ".$row["user"]." </h2>
                    <h2> ".$row["townsname"]." </h2>
                    <p class='info'>" . $row["fruits"]. "</p>
                    <p class='info'>" . $row["flowers"]. "</p>
                </div>
            </div>
        </div>
        ";


        }
        
    } else {
        echo "0 results";
    }
}

?>