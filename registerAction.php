<?php 
    session_start();
    include('config.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    function sendemail_verify($r_username,$r_email,$verify_token)
    {
        $mail = new PHPMailer(true);
        $mail->isSMTP(); 
        $mail->SMTPAuth   = true;  

        $mail->Host       = 'smtp.gmail.com';  
        $mail->Username   = 'campusdotcrew@gmail.com';   
        $mail->Password   = 'ebbssslzamzqztzs'; 

        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('campusdotcrew@gmail.com', $r_username);
        $mail->addAddress($r_email);
        
        $mail->isHTML(true); 
        $mail->Subject = 'Email Verification from Campus Dot Crew';
        
        $email_template = "
            <h2>Tou have registered with campus Dot Crew</h2>
            <h5>Verify your email address to login with the given link</h5>
            <br>
            <a href='http://localhost:8080/53G/Campus360/verify_email.php?token=$verify_token'>Click Me</a>
        ";
        $mail->Body = $email_template;
        $mail->send();
    }

    if(isset($_POST['register_btn']))
    {
        $r_username = $_POST['r_username'];
        $r_email = $_POST['r_email'];
        $r_phone = $_POST['r_phone'];
        $r_pass = $_POST['r_pass'];
        $r_con_pass = $_POST['r_con_pass'];
        
        $verify_token = md5(rand());

        // regex of all fields
        $username_pattern = "/[A-Za-z ._]{3,}/";
        $email_pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";
        $phone_pattern = "/(\+88)?-?01[3-9]\d{8}/";
        $pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,}/";

        // To check email not used twice
        $duplicate_email = mysqli_query($conn, "SELECT * FROM `register` WHERE db_email='$r_email'");

        if (mysqli_num_rows($duplicate_email) > 0) {
            // $_SESSION['status'] = 'Email Already Taken';
            echo '<script>alert("Email Already Taken");</script>';
            echo "<script>location.href='index.php'</script>";
        }
        elseif (!preg_match($username_pattern, $r_username)) 
        {
            // $_SESSION['status'] = 'Invalid Username. Only space, character, underscore are allowed.';
            echo '<script>alert("Invalid Username. Only space, character, underscore are allowed.");</script>';
            echo "<script>location.href='index.php'</script>";
        } 
        elseif (!preg_match($email_pattern, $r_email)) 
        {
            // $_SESSION['status'] = 'Invalid Email';
            echo '<script>alert("Invalid Email");</script>';
            echo "<script>location.href='index.php'</script>";
        } 
        elseif (!preg_match($phone_pattern, $r_phone)) 
        {
            // $_SESSION['status'] = 'Invalid Phone Number. Only BD phone number is allowed.';
            echo '<script>alert("Invalid Phone number");</script>';
            echo "<script>location.href='index.php'</script>";
        } 
        elseif (!preg_match($pass_pattern, $r_pass)) 
        {
            // $_SESSION['status'] = 'Invalid Password';
            echo '<script>alert("Invalid Password");</script>';
            echo "<script>location.href='index.php'</script>";
        } elseif ($r_pass != $r_con_pass) {
            // $_SESSION['status'] = 'Password not matched';
            echo '<script>alert("Passqord not matched.");</script>';
            echo "<script>location.href='index.php'</script>";
        } 
        else
        {
            $hash_pass = password_hash($r_pass, PASSWORD_DEFAULT);

            $query = "INSERT INTO `register`(`db_username`, `db_phone`, `db_email`, `db_pass`, `verify_token`) VALUES ('$r_username','$r_phone','$r_email','$hash_pass','$verify_token')";
            $query_run = mysqli_query($conn, $query);
            
            if($query_run)
            {
                sendemail_verify("$r_username","$r_email","$verify_token");
                $_SESSION['status'] = "Registration Successful..!! Please verify your Email Address";
                echo "<script>alert('Registration Successful..!! Please verify your Email Address')</script>";
                header('Location:index.php');
            } else{
                $_SESSION['status'] = "Registration failed";
                echo "<script>alert('Registration failed')</script>";
                header('Location:index.php');
            }
        }
    }
?>

