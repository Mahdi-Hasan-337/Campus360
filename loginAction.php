<?php 
    session_start();
    include('config.php');
    
    if(isset($_POST['login_btn']))
    {
        if(!empty(trim($_POST['l_email'])) && !empty(trim($_POST['l_pass'])))
        {
            $l_email = mysqli_real_escape_string($conn, $_POST['l_email']);
            $l_pass = mysqli_real_escape_string($conn, $_POST['l_pass']);

            $query = "SELECT * FROM `register` WHERE db_email='$l_email' AND verify_status = '1' LIMIT 1";
            
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result)>0)
            {
                $row = mysqli_fetch_assoc($result);
                $db_pass = $row['db_pass'];
                if ($row['verify_status'] == "1" && (password_verify($l_pass, $db_pass)))
                {
                    $_SESSION['l_email'] = $l_email;
                    $_SESSION['status'] = "Successfully Logged in";
                    header("Location:index.php");
                    exit(0);
                } 
                else{
                    $_SESSION['status'] = "From Login ";
                    header("Location:index.php");
                    exit(0);
                }
            } 
            else{
                $_SESSION['status'] = "Invalid email or password";
                header("Location:index.php");
                exit(0);
            }
        }
        else{
            $_SESSION['status'] = "All fields are mandatory";
            header("Location:index.php");
            exit(0);
        }
    }
?>
