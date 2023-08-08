<?php
    include 'config.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $result = mysqli_query($conn, "SELECT active_status FROM `register` WHERE id='$id'");
        $row = mysqli_fetch_assoc($result);
        $current_status = $row['active_status'];

        $updated_status = ($current_status == 1) ? 0 : 1;

        mysqli_query($conn, "UPDATE `register` SET active_status='$updated_status' WHERE id='$id'");

        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }
?>