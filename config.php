<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "web_53g";

    $conn = mysqli_connect($servername, $username, $password, $dbName);
    if(!$conn){
        die("Connection Failed".mysqli_connect_error());
    }
    else{
        //echo"<script>alert('DB connect')</script>";
    } 
?>