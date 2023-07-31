<?php
    include 'config.php';

    // to accept all values coming from register.php field
    $r_username = $_POST['r_username'];
    $r_email = $_POST['r_email'];
    $r_phone = $_POST['r_phone'];
    $r_pass = $_POST['r_pass'];
    $r_con_pass = $_POST['r_con_pass'];

    // regex of all fields
    $username_pattern = "/[A-Za-z .]{3,20}/";
    $email_pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";
    $phone_pattern = "/(\+88)?-?01[3-9]\d{8}/";
    $pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,20}/";

    // To check email not used twice
    $duplicate_email = mysqli_query($conn, "SELECT * FROM `register` WHERE db_email='$r_email'");

    if (mysqli_num_rows($duplicate_email) > 0) {
        echo "<script>alert('Username Already Taken')</script>";
        echo "<script>location.href='index.php'</script>";
    } elseif (!preg_match($username_pattern, $r_username)) {
        echo "<script>alert('Invalid Username')</script>";
        echo "<script>location.href='index.php'</script>";
    } elseif (!preg_match($email_pattern, $r_email)) {
        echo "<script>alert('Invalid Email')</script>";
        echo "<script>location.href='index.php'</script>";
    } elseif (!preg_match($phone_pattern, $r_phone)) {
        echo "<script>alert('Invalid Phone Number')</script>";
        echo "<script>location.href='index.php'</script>";
    } elseif (!preg_match($pass_pattern, $r_pass)) {
        echo "<script>alert('Invalid Password')</script>";
        echo "<script>location.href='index.php'</script>";
    } elseif ($r_pass != $r_con_pass) {
        echo "<script>alert('Password not matched')</script>";
        echo "<script>location.href='index.php'</script>";
    } else {
        $hash_pass = password_hash($r_pass, PASSWORD_DEFAULT);

        $insert_query = "INSERT INTO `register`(`db_username`, `db_email`, `db_phone`, `db_pass`) VALUES ('$r_username','$r_email','$r_phone','$hash_pass')";
        if (!mysqli_query($conn, $insert_query)) {
            die("Not Inserted...!!!");
        } else {
            echo "<script>alert('Inserted')</script>";
            echo "<script>location.href='index.php'</script>";
        }
    }
?>
