<?php
    session_start();
    include('../../config.php'); 
    
    if(isset($_GET['token']))
    {
        $token = $_GET['token'];
        $verify_query = "SELECT verify_token, verify_status FROM register WHERE verify_token='$token' LIMIT 1";
        $verify_query_run = mysqli_query($conn, $verify_query);

        if(mysqli_num_rows($verify_query_run) > 0){
            $row = mysqli_fetch_array($verify_query_run);
            if($row['verify_status'] == "0")
            {
                $clicked_token = $row['verify_token'];
                $update_query = "UPDATE register SET verify_status = '1' WHERE verify_token = '$clicked_token' LIMIT 1";
                $update_query_run = mysqli_query($conn, $update_query);

                if($update_query_run)
                {
                    $_SESSION['p_status'] = "Your acccount has been verified successfully";
                    header('Location:../../index.php');
                    exit(0);
                } 
                else
                {
                    $_SESSION['status'] = "Verification Failed";
                    header('Location:../../index.php');
                    exit(0);
                }
            }
            else
            {
                $_SESSION['p_status'] = "Email Alrerady Verified. Please Login";
                header('Location:../../index.php');
                exit(0);
            }
        } 
        else 
        {
            $_SESSION['status'] = "Token does not exists";
            header('Location:../../index.php');
        }
    } 
    else
    {
        $_SESSION['status'] = "Not Allowed...!!! Something went wrong.....!!!";
        header('Location:../../index.php');
    }
?>