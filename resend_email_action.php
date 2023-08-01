<?php
    session_start();
    include('config.php');
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    function resend_email_verify($name, $email, $verify_token)
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
        $mail->setFrom('campusdotcrew@gmail.com', $name);
        $mail->addAddress($email);
        
        $mail->isHTML(true);
        $mail->Subject = 'Resend Email Verification from Campus Dot Crew';
        
        $email_template = "
            <h2>You have registered with campus Dot Crew</h2>
            <h5>Verify your email address to login with the given link</h5>
            <br>
            <a href='http://localhost:8080/53G/Campus360/verify_email.php?token=$verify_token'>Click Me</a>
        ";
        $mail->Body = $email_template;
        $mail->send();
    }

    if(isset($_POST['remail_btn']))
    {
        if(!empty(trim($_POST['remail'])))
        {
            $email = $_POST['remail'];
            $checkemail_query = "SELECT * FROM register WHERE db_email = '$email' LIMIT 1";
            $checkemail_query_run = mysqli_query($conn, $checkemail_query);
            
            if(mysqli_num_rows($checkemail_query_run) > 0)
            {
                $row = mysqli_fetch_array($checkemail_query_run);
                if($row['verify_status'] == 0)
                {
                    $name = $row['db_username'];
                    $email = $row['db_email'];
                    $verify_token = $row['verify_token'];
                    resend_email_verify($name, $email, $verify_token);
                    $_SESSION['status'] = "Verification Email Link has been sent to your email";
                    header('Location:index.php');
                    exit(0);
                }
                else
                {
                    $_SESSION['status'] = "Email already verified. Please login now";
                    header('Location:index.php');
                    exit(0);
                }
            }
            else
            {
                $_SESSION['status'] = "Email is not registered. Please register now";
                header('Location:index.php');
                exit(0);
            }
        }
        else
        {
            $_SESSION['status'] = "Please enter the email field";
            header('Location:index.php');
            exit(0);
        }
    }

?>