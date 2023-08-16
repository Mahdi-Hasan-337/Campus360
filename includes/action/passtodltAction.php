<?php
    session_start();
    include('../../config.php');

    if (isset($_POST["passtodlt_btn"])) {
        $email = $_SESSION['l_email'];

        $passwordInput = $_POST['dlt_pass'];

        $query = "SELECT * FROM `register` WHERE db_email='$email' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $db_pass = $row['db_pass'];

            if (password_verify($passwordInput, $db_pass)) {
                $deleteQuery = "DELETE FROM `register` WHERE `db_email`='$email'";
                if (mysqli_query($conn, $deleteQuery)) {
                    session_destroy();
                    $_SESSION['p_status'] = "Successfully Deleted";
                    header("Location: ../../index.php");
                    exit();
                } else {
                    $_SESSION['status'] = "Error deleting account: ";
                    header("Location: ../../index.php");
                    exit();
                }
            } else {
                $_SESSION['status'] = "Incorrect password. Account deletion failed.";
                header("Location: ../../index.php");
                exit();
            }
        } else {
            $_SESSION['status'] = "User not found. Account deletion failed.";
            header("Location: ../../index.php");
            exit();
        }
    }
    header("Location: ../../index.php");
    exit();
?>
