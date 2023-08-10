<?php
    include 'config.php';

    $email = $_SESSION['l_email'];
    $allData = mysqli_query($conn, "SELECT * FROM `register` WHERE db_email='$email'");

    while($row = mysqli_fetch_array($allData))
    {
        $image_path = '';

        $default_image = 'assets/images/campusdotcrew.png';
        $db_image = $row['db_image'];
        
        if (empty($row['db_image'])) {
            $image_path = $default_image;
        } else{
            $image_path = 'assets/uploads/' . $db_image;
        }
        echo "<img src='$image_path' alt='Avatar' class='img-fluid rounded-circle'  style='height: 2rem; width: 2rem; display: block; margin: 0 auto; text-align: center;'>";
    }
?>