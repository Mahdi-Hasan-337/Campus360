
<?php
    include 'config.php';

    // to accept all values coming from register.php field
    $r_username = $_POST['r_username'];
    $r_email = $_POST['r_email'];
    $r_phone = $_POST['r_phone'];
    $r_pass = $_POST['r_pass'];
    $r_con_pass = $_POST['r_con_pass'];

    // regex of all fields
    $username_pattern = "/[A-Za-z ._]{3,}/";
    $email_pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";
    $phone_pattern = "/(\+88)?-?01[3-9]\d{8}/";
    $pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,}/";

    // To check email not used twice
    $duplicate_email = mysqli_query($conn, "SELECT * FROM `register` WHERE db_email='$r_email'");

    if (mysqli_num_rows($duplicate_email) > 0) {
        // $_SESSION['status'] = 'Email Already Taken';
        echo '<script>alert("Email Already Taken");</script>';
        echo "<script>location.href='index.php'</script>";
    } elseif (!preg_match($username_pattern, $r_username)) {
        // $_SESSION['status'] = 'Invalid Username. Only space, character, underscore are allowed.';
        echo '<script>alert("Invalid Username. Only space, character, underscore are allowed.");</script>';
        echo "<script>location.href='index.php'</script>";
    } elseif (!preg_match($email_pattern, $r_email)) {
        // $_SESSION['status'] = 'Invalid Email';
        echo '<script>alert("Invalid Email");</script>';
        echo "<script>location.href='index.php'</script>";
    } elseif (!preg_match($phone_pattern, $r_phone)) {
        // $_SESSION['status'] = 'Invalid Phone Number. Only BD phone number is allowed.';
        echo '<script>alert("Invalid Phone number");</script>';
        echo "<script>location.href='index.php'</script>";
    } elseif (!preg_match($pass_pattern, $r_pass)) {
        // $_SESSION['status'] = 'Invalid Password';
        echo '<script>alert("Invalid Password");</script>';
        echo "<script>location.href='index.php'</script>";
    } elseif ($r_pass != $r_con_pass) {
        // $_SESSION['status'] = 'Password not matched';
        echo '<script>alert("Passqord not matched.");</script>';
        echo "<script>location.href='index.php'</script>";
    } else {
        $hash_pass = password_hash($r_pass, PASSWORD_DEFAULT);

        $insert_query = "INSERT INTO `register`(`db_username`, `db_email`, `db_phone`, `db_pass`) VALUES ('$r_username','$r_email','$r_phone','$hash_pass')";
        if (!mysqli_query($conn, $insert_query)) {
            // $_SESSION['status'] = "Not Inserted...!!!";
            echo '<script>alert("Not inserted.");</script>';
        } else {
            $_SESSION['status'] = 'Inserted';
            echo "<script>location.href='index.php'</script>";
        }
    }
?>