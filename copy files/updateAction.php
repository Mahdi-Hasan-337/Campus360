<?php
    if (isset($_POST["updatedata"])) {
        include 'config.php';

        $id = $_POST['update_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $updateQuery = "UPDATE `register` SET `db_username`='$name', `db_email`='$email', `db_phone`='$phone' WHERE `id`='$id'";

        if (mysqli_query($conn, $updateQuery)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error updating profile: " . mysqli_error($conn);
        }
    }
?>
