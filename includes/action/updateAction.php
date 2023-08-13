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

    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $imageName = mysqli_real_escape_string($conn, $_FILES['image']['name']);
        $img_des = "../../assets/uploads/" . $imageName;

        if (move_uploaded_file($image['tmp_name'], $img_des)) {
            $updateQuery = "UPDATE `register` SET `db_username`='$name', `db_email`='$email', `db_phone`='$phone', `fb`='$facebook', `telegram`='$telegram', `github`='$github', `db_image`='$img_des' WHERE `id`='$id'";
        } else {
            $_SESSION['status'] = "Error uploading image.";
            header("Location: ../../index.php");
            exit();
        }
    } else {
        $updateQuery = "UPDATE `register` SET 
                        `db_username`='$name', `db_email`='$email', `db_phone`='$phone', `fb`='$facebook', `telegram`='$telegram', `github`='$github' WHERE `id`='$id'";
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