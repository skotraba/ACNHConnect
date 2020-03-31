<?php

include '../connect/connect.php';
session_destroy();
header("Location: ../main/index.php");

?>