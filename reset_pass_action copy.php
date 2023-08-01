<?php
    session_start();
    include('config.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    function send_password_reset($get_name, $get_email, $token)
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
        $mail->setFrom('campusdotcrew@gmail.com', $get_name);
        $mail->addAddress($get_email);
        
        $mail->isHTML(true);
        $mail->Subject = 'Reset password link';
        
        $email_template = "
            <h2>Hello</h2>
            <h5>You are receiving this mail from Campus Dot Crew as you are requested to reset password</h5>
            <br>
            <a href='http://localhost:8080/53G/Campus360/reset_pass_modal_2.php?token=$token&email=$get_email'>Click Me</a>
        ";
        $mail->Body = $email_template;
        $mail->send();
    }

    if(isset($_POST['repass_btn']))
    {
        $email = mysqli_real_escape_string($conn, $_POST['repass_email']);
        $token = md5(rand());

        $check_email = "SELECT db_email FROM register WHERE db_email = '$email' LIMIT 1";
        $check_email_run = mysqli_query($conn, $check_email);

        if (mysqli_num_rows($check_email_run) > 0) {
            $row = mysqli_fetch_array($check_email_run); // Corrected function name
            $get_name = $row['db_username']; // Assuming the column name is 'db_username'
            $get_email = $row['db_email']; // Corrected typo here
    
            $update_token = "UPDATE register SET verify_token='$token' WHERE db_email='$email' LIMIT 1";
            $update_token_run = mysqli_query($conn, $update_token);
    
            if ($update_token_run) {
                send_password_reset($get_name, $get_email, $token);
                $_SESSION['status'] = "Password reset link has been sent to your email";
                header('Location:index.php');
                exit(0);
            } else {
                $_SESSION['status'] = "Something went wrong";
                header('Location:index.php');
                exit(0);
            }
        } else {
            $_SESSION['status'] = "No email Found";
            header('Location:index.php');
            exit(0);
        }
    } else { }

    if(isset($_POST['uppass_btn']))
    {
        $email = $_POST['email'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        $token = $_POST['password_token'];

        if(!empty($token))
        {
            if(!empty($email) && !empty($new_password) && !empty($confirm_password))
            {
                // checing token is valid or not
                $check_token = "SELECT verify_token FROM register WHERE verify_token='$token' LIMIT 1";
                $check_token_run = mysqli_query($conn, $check_token);

                if(mysqli_num_rows($check_token_run) > 0)
                {
                    if($new_password == $confirm_password)
                    {
                        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                        $update_password = "UPDATE register SET db_pass='$hashed_password' WHERE verify_token='$token' LIMIT 1";
                        $update_password_run = mysqli_query($conn, $update_password);
                        if($update_password_run)
                        {
                            $new_token = md5(rand()) . "campus360";
                            $update_to_new_token = "UPDATE register SET verify_token='$new_token' WHERE verify_token='$token' LIMIT 1";                      $update_to_new_token_run = mysqli_query($conn, $update_to_new_token);

                            $_SESSION['status'] = "New Password Updated Successfully";
                            header("Location:index.php");
                            exit(0);
                        }
                        else{
                            $_SESSION['status'] = "Didn't update password....!! Something went Wrong";
                            header("Location:index.php?token=$token&email=$email");
                            exit(0);
                        }
                    }
                    else{
                        $_SESSION['status'] = "Password and Confrim Password Doesn't match";
                        header("Location:index.php?token=$token&email=$email");
                        exit(0);
                    }
                }
                else{
                    $_SESSION['status'] = "invalid Token";
                    header("Location:index.php?token=$token&email=$email");
                    exit(0);
                }
            }
            else
            {
                $_SESSION['status'] = "All fields are mandatory";
                header("Location:index.php?token=$token&email=$email");
                exit(0);
            }
        }
        else
        {
            $_SESSION['status'] = "no token available";
            header('Location:index.php');
            exit(0);
        }
    }
?>