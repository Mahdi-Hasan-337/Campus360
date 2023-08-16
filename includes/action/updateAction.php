<?php
session_start();
include '../../config.php';

if (isset($_POST["updatedata"])) {
    $id = $_POST['update_id'];
    $name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $facebook = mysqli_real_escape_string($conn, $_POST['facebook']);
    $telegram = mysqli_real_escape_string($conn, $_POST['telegram']);
    $github = mysqli_real_escape_string($conn, $_POST['github']);

    // Check if an image is uploaded or not
    if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
        $image = $_FILES['image'];
        $imageName = mysqli_real_escape_string($conn, $_FILES['image']['name']);
        $img_des = "../../assets/uploads/" . $imageName;

        /// Update with image
        if (move_uploaded_file($image['tmp_name'], $img_des)) {
            $updateQuery = "UPDATE `register` SET 
            `db_username`='$name', 
            `db_email`='$email', 
            `db_phone`='$phone', 
            `fb`='$facebook', 
            `telegram`='$telegram', 
            `github`='$github', 
            `db_image`='$img_des' 
            WHERE `id`='$id'";
        } else {
            $_SESSION['status'] = "Error uploading image. Please, upload an Image";
            header("Location: ../../index.php");
            exit();
        }
    } else {
        /// Update without image
        $updateQuery = "UPDATE `register` SET 
        `db_username`='$name', 
        `db_email`='$email', 
        `db_phone`='$phone', 
        `fb`='$facebook', 
        `telegram`='$telegram', 
        `github`='$github' 
        WHERE `id`='$id'";
    }

    if (mysqli_query($conn, $updateQuery)) {
        $_SESSION['p_status'] = "Profile updated successfully.";
        header("Location: ../../index.php");
        exit();
    } else {
        $_SESSION['status'] = "Error updating profile.";
        header("Location: ../../index.php");
        exit();
    }
}
?>