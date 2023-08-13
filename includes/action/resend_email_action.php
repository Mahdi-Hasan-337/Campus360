<?php
    session_start();
    include('../../config.php');
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../../vendor/autoload.php';

    function resend_email($name, $email, $token)
    {
        $mail = new PHPMailer(true);
        $mail->isSMTP(); 
        $mail->SMTPAuth   = true;  

        $mail->Host       = 'smtp.gmail.com';  
        $mail->Username   = 'campusdotcrew@gmail.com';   
        $mail->Password   = 'ebbssslzamzqztzs'; 

        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;

        $mail->setFrom('campusdotcrew@gmail.com', $name);
        $mail->addAddress($email);
        
        $mail->isHTML(true);
        $mail->Subject = 'Resend Email Verification from Campus Dot Crew';
        
        $mail_template = "
            <h2>You have registered with campus Dot Crew</h2>
            <h5>Verify your email address to login with the given link</h5>
            <br>
            <a href='http://localhost:8080/53G/Campus360/includes/action/verify_email_Action.php?token=$token'>Click Me</a>
        ";
        $mail->Body = $mail_template;
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
                    $token = $row['verify_token'];
                    resend_email($name, $email, $token);
                    $_SESSION['p_status'] = "Email verification Link has been sent to your email";
                    header('Location:../../index.php');
                    exit();
                }
                else
                {
                    $_SESSION['p_status'] = "Email already verified. Please login now";
                    header('Location:../../index.php');
                    exit();
                }
            }
            else
            {
                $_SESSION['status'] = "Email is not registered. Please register now";
                header('Location:../../index.php');
                exit();
            }
        }
        else
        {
            $_SESSION['status'] = "Please enter the email field";
            header('Location:../../index.php');
            exit();
        }
    }

?>