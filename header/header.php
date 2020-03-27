<?php

session_start();



function createHeader(){
    
    $user = $_SESSION['login_user'];

    if(isset($user)) {
        echo "<h2 class='m-5'>Welcome $user !</h2>";
        
    } else {
        echo "<h2>Welcome</h2>";
    }
    
}

?>