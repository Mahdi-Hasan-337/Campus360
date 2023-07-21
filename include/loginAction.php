<?php
    include 'include/config.php';
    session_start();    
    $l_username = $_POST['l_username'];
    $l_pass = $_POST['l_pass'];

    $result = mysqli_query($conn,"SELECT * FROM `register` WHERE db_username='$l_username' AND db_pass='$l_pass'");

    if(mysqli_num_rows($result)){
        $_SESSION['l_username'] = $l_username;
        echo "<script>location.href='index.php'</script>";
    }
    else{
        echo "<script>alert('Username and Password is not matching !!')</script>";
        echo "<script>location.href='index.php'</script>";
    }
?>   