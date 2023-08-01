<?php
    include 'config.php';
    session_start();

    $l_email = $_POST['l_email'];
    $l_pass = $_POST['l_pass'];

    $result = mysqli_query($conn, "SELECT * FROM `register` WHERE db_email='$l_email'");

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $db_pass = $row['db_pass'];

        if (password_verify($l_pass, $db_pass)) {
            $_SESSION['l_email'] = $l_email;
            echo "<script>location.href='index.php'</script>";
        } else {
            $_SESSION['status'] = "Username and Password do not match!";
            echo "<script>location.href='index.php'</script>";
        }
    } else {
        $_SESSION['status'] = 'Username and Password is not matching !!';
        echo "<script>location.href='index.php'</script>";
    }
?>
