<?php
    if (isset($_POST["updatedata"])) {
        include 'config.php';

        $id = $_POST['update_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        // file type controlling
        $fileType = strtolower(pathinfo($img_des, PATHINFO_EXTENSION));
        if (!preg_match("/(jpg|jpeg|png|webp|gif)$/i", $fileType)) {
            echo "<script>alert('Invalid file type. Only JPG, JPEG, PNG, WebP, and GIF files are allowed.')</script>";
            exit();
        }

        if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
            $image = $_FILES['image'];
            $imageLocation = $_FILES['image']['tmp_name'];
            $imageName = $_FILES['image']['name'];
            $img_des = "uploads/" . $imageName;

            if (move_uploaded_file($imageLocation, $img_des)) {
                $updateQuery = "UPDATE `register` SET `db_username`='$name', `db_email`='$email', `db_phone`='$phone', `db_image`='$imageName' WHERE `id`='$id'";
            } else {
                echo "<script>alert('Error uploading image.')</script>";
                exit();
            }
        } else {
            $updateQuery = "UPDATE `register` SET `db_username`='$name', `db_email`='$email', `db_phone`='$phone' WHERE `id`='$id'";
        }

        if (mysqli_query($conn, $updateQuery)) {
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Error updating profile.')</script>";
        }
    }
?>