<?php
    session_start();
    include('../../config.php'); 

    $loginMessage = "";
    
    if(isset($_GET['token']))
    {
        $token = $_GET['token'];
        $verify_query = "SELECT verify_token,verify_status FROM register WHERE verify_token='$token' LIMIT 1";
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
                    //$_SESSION['status'] = "Your acccount has been verified successfully";
                    //echo "<script>alert('Your Account has been verified sy=uccessfully...!!')</script>";
                    header('Location:../../index.php');
                    exit(0);
                } 
                else
                {
                    $_SESSION['status'] = "Verification Failed";
                    //echo "<script>alert('Verification Failed')</script>";
                    header('Location:../../index.php');
                    exit(0);
                }
            }
            else
            {
                $_SESSION['status'] = "Email Alrerady Verified. Please Login";
                //echo "<script>alert('Email Already Taken')</script>";
                header('Location:../../index.php');
                exit(0);
            }
        } 
        else 
        {
            $_SESSION['status'] = "Token does not exists";
            //echo "<script>alert('Token does not exist')</script>";
            header('Location:../../index.php');
        }
    } 
    else
    {
        $_SESSION['status'] = "Not Allowed";
        //echo "<script>alert('Not allowed')</script>";
        header('Location:../../index.php');
    }

?>