<?php
session_start(); // Start the session
include 'config.php';

if (isset($_POST["updatedata"])) {
    $id = $_POST['update_id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $facebook = mysqli_real_escape_string($conn, $_POST['facebook']);
    $telegram = mysqli_real_escape_string($conn, $_POST['telegram']);
    $github = mysqli_real_escape_string($conn, $_POST['github']);

    // Handle image upload if provided
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image'];
        $imageLocation = $_FILES['image']['tmp_name'];
        $imageName = mysqli_real_escape_string($conn, $_FILES['image']['name']);
        $img_des = "uploads/" . $imageName;

        if (move_uploaded_file($imageLocation, $img_des)) {
            $updateQuery = "UPDATE `register` SET 
                            `db_username`='$name', 
                            `db_email`='$email', 
                            `db_phone`='$phone', 
                            `fb`='$facebook', 
                            `telegram`='$telegram', 
                            `github`='$github', 
                            `db_image`='$imageName' WHERE `id`='$id'";
        } else {
            $_SESSION['status'] = "Error uploading image.";
            header("Location: index.php");
            exit();
        }
    } else {
        $updateQuery = "UPDATE `register` SET 
                        `db_username`='$name', 
                        `db_email`='$email', 
                        `db_phone`='$phone', 
                        `fb`='$facebook', 
                        `telegram`='$telegram', 
                        `github`='$github' WHERE `id`='$id'";
    }

    if (mysqli_query($conn, $updateQuery)) {
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['status'] = "Error uploading profile.";
    }
}
?>