<?php
    include 'config.php';

    $email = $_SESSION['l_email'];
    $allData = mysqli_query($conn, "SELECT * FROM `register` WHERE db_email='$email'");

    while($row = mysqli_fetch_array($allData))
    {
        $image_path = '';

        $default_image = 'images/campusdotcrew.png';
        
        if (!empty($row['db_image'])) {
            $image_path = 'uploads/' . $row['db_image'];
        } else {
            $image_path = $default_image;
        }
        echo "<img src='$image_path' alt='Avatar' class='img-fluid rounded-circle'  style='height: 3rem; width: 3rem; display: block; margin: 0 auto; text-align: center;'>";
    }
?>