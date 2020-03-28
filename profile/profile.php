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

    // echo "

    // <h1>Username:</h1>
    // <h3 >$user</h3>
    // <h2>Townsname:</h2>
    // <h3>answer</h3>
    // <h2>Fruit:</h2>
    // <h3>answer</h3>
    // <h2>Flowers:</h2>
    // <h3>answer</h3>
    // <br><br>
    // <a class='btn btn-primary' href='../post/index.php'>POST</a>

    // ";
}

?>