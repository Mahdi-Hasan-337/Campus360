<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="images/favicon/favicon.ico" /> -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Campus Dot Crew</title>
    <?php
    $cssFile = isset($_SESSION['l_email']) ? 'after_login_styles.css' : 'before_login_styles.css';
    echo '<link rel="stylesheet" type="text/css" href="css/' . $cssFile . '">';
    ?>
  </head>
  <body>
    <?php include 'indexitems/nav.php'; ?>
    <?php include 'indexitems/carousel.php'; ?>
    <?php // include 'indexitems/otherhome.php'; ?>
    <?php include 'indexitems/student.php'; ?>
    <?php include 'indexitems/footer.php'; ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  

    <!-- Javascript -->
    <script>
      function togglePasswordVisibility(inputId) {
        const passwordInput = document.getElementById(inputId);
        const passwordToggleIcon = document.querySelector(`[onclick="togglePasswordVisibility('${inputId}')"]`);
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordToggleIcon.classList.remove('fa-eye-slash');
            passwordToggleIcon.classList.add('fa-eye');
        } else {
            passwordInput.type = 'password';
            passwordToggleIcon.classList.remove('fa-eye');
            passwordToggleIcon.classList.add('fa-eye-slash');
        }
      }
    </script>

  <!-- Update Jquery -->
  <script>
    $(document).ready(function() {
      $(".updatebtn").on("click", function() {
        $("#updateprofilemodal").modal("show");

        var userId = $(this).data("user-id");

        var name = $("#profileModal h2").text();
        var email = $("#profileModal h5:eq(0)").text();
        var phone = $("#profileModal h5:eq(1)").text();

        $("#update_id").val(userId);
        $("#name").val(name);
        $("#email").val(email);
        $("#phone").val(phone);
      });
    });
  </script>

  <!-- Delete Jquery -->
  <script>
        $(document).ready(function(){
            $('.deletebtn').on('click', function() {
                $('#deletemodal').modal('show');
            });
        });
    </script>
</body>
</html>