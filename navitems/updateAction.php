<?php
    include 'config.php';
    $id = $_POST['id'];
    $name = $_POST['db_username'];
    $email = $_POST['db_email'];
    $phone = $POST['db_phone'];
    
    $image = $_FILES['db_image']; 
    $imageLocation = $_FILES['db_image']['tmp_name'];
    $imageName = $_FILES['db_image']['name'];
    $img_des = "up_images/".$imageName;
    move_uploaded_file($imageLocation, $img_des);

    $updateQuery = "UPDATE `register` SET `db_username`='$name',`db_email`='$email',`db_image`='$img_des' WHERE id = '$id'";

    if(mysqli_query($conn, $updateQuery))
    {
        echo "<script>alert('Updated....!!!')</script>";
        echo "<script>location.href='index.php'</script>";
    }
?>