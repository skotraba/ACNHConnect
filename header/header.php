<?php
include '../connect/connect.php';

if (isset($_SESSION['posting_not_logged_in'])) {
    // echo("Must be logged in to post");
    echo("<script>alert('Must be logged in to post')</script>");
    unset($_SESSION['posting_not_logged_in']);
}

function createHeader(){
    
        if (isset($_SESSION['login_user'])) {

            $user = $_SESSION['login_user'];
        }

        if(isset($user)) {
            echo "<h2 class='m-5'>Welcome $user !</h2>";
            
        } else {
            echo "<h2>Welcome</h2>";
        }
    
    
}

?>