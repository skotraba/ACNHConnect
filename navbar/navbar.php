<?php

include '../connect/connect.php';

function createNavBar(){
    if (isset($_SESSION['login_user'])) {

        $user = $_SESSION['login_user'];
    }
    
    if(isset($user)) {
        echo '
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
          <a class="navbar-brand" href="#">ACNH Connect</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../profile/viewProfile.php">View Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../post/index.php">Post</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../logout/logout.php">LogOut</a>
              </li>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        ';
    } 
    if(!isset($user)) {
        echo '
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
        <a class="navbar-brand" href="#">ACNH Connect</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../login/login.html">Log in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../register/register.html">Register</a>
            </li>
              </div>
            </li>
          </ul>
        </div>
      </nav>
        ';
    }
    
}












?>