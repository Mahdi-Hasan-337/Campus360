<?php
    session_start();
    echo "Home Page";
    if(isset($_SESSION['l_username']))
    {
        echo "<h3> Welcome ".$_SESSION['l_username']. " to Home Page</h3>";
        echo "<a href='logout.php'><input type = 'button' value='logout' name='logout'></a>";
        //echo "Welcome to Home";
    }
    else{
        echo "<script>alert('Do not access from URL')</script>";
        echo "<script>location.href='index.php'</script>";
    }


    // 1. session_start(); /// start session
    // 2. $_SESSION[index name] = $valid_username /// create the session
    // 3. echo $_SESSION[index name] 

    // 1. session_unset(); /// unset the varisble
    // 2. session_destroy(); /// destroy the session /// related to logout 
?> 