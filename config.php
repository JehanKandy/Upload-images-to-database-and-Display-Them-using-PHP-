<?php
    $server = "localhost";
    $user  = "root";
    $pass = "";
    $db = "test_image";

    $con = mysqli_connect($server,$user,$pass,$db);

    if(!$con){
        die("Connecting Lost...!".mysqli_connect_error());
    }
?>