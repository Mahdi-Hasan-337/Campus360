<?php
    include 'config.php';
    $email = $_SESSION['l_email'];
    $allData = mysqli_query($conn, "SELECT * FROM `register` WHERE db_email='$email'");

    while($row = mysqli_fetch_array($allData))
    {
        echo "$row[db_username]";
    }
?>