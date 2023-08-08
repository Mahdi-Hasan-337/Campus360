<?php 
    session_start();
    include('config.php');
    
    $loginMessage = "";

    if(isset($_POST['login_btn']))
    {
        if(!empty(trim($_POST['l_email'])) && !empty(trim($_POST['l_pass'])))
        {
            $l_email = mysqli_real_escape_string($conn, $_POST['l_email']);
            $l_pass = mysqli_real_escape_string($conn, $_POST['l_pass']);

            $query = "SELECT * FROM `register` WHERE db_email='$l_email' AND verify_status = '1' LIMIT 1";
            
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0)
            {
                $row = mysqli_fetch_assoc($result);
                $db_pass = $row['db_pass']; 
                $verify_status = $row['verify_status'];
                $active_status = $row['active_status'];
                
                // email and password checking
                if ($verify_status == "1" && password_verify($l_pass, $db_pass))
                {
                    // active status checking
                    if ($active_status == "1") {
                        $_SESSION['l_email'] = $l_email;
                         echo "<script>location.href='index.php'</script>";
                    } 
                    else{
                        $loginMessage = "Your account is not active. Please contact support.";
                        echo "<script>alert('$loginMessage');</script>";
                        echo "<script>location.href='index.php'</script>";
                    }
                } 
                else{
                    $loginMessage = "Invalid email or password.";
                    echo "<script>alert('$loginMessage');</script>";
                    echo "<script>location.href='index.php'</script>";
                }
            } 
            else{
                $loginMessage = "Invalid email or password.";
                echo "<script>alert('$loginMessage');</script>";
                echo "<script>location.href='index.php'</script>";
            }
        }
        else{
            $loginMessage = "All fields are mandatory.";
            echo "<script>alert('$loginMessage');</script>";
            echo "<script>location.href='index.php'</script>";
        }
    }
?>