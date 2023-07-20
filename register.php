<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab:wght@700&family=Roboto:ital,wght@1,500&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: gray;
        }
        form{
            padding: 2rem;
            border-radius: 1rem;
            background: white;
        }
        input.form-control:focus {
            box-shadow: none;
        }
        h2{
            text-align: center;
        }
        .input-box{
            position: relative;
            margin-top: 30px;
            width: 100%;
            height: 40px;
        }
        .input-box input{
            font-size:1rem;
            height: 100%;
            width: 100%;
            border: none;
            outline: none;
            padding: 0 30px;
            color: #333;
            transition: all 0.2s ease;
            border-bottom: 1.5px solid #aaaaaa;
        }
        .input-box input:focus{
            border-color: rgb(174, 174, 245);
        }
        .input-box i{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
        }
        .input-box i.email,
        .input-box i.password{
            left: 0px;
            color: #707070;
            font-size: 1rem;
        }
        .input-box input:focus ~ i.email,
        .input-box input:focus ~ i.password{
            color: rgb(174, 174, 245);
        }
        .input-box i.pwd_hide{
            right: 0;
            font-size: 18px;
        }
        .option-field{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 1rem;
        }
        .checkbox{
            display: flex;
            column-gap: 8px;
            white-space: nowrap;
            font-size: 12px;
        }

        .checkbox input{
            accent-color: rgb(174, 174, 245);
        }
        .checkbox label{
            user-select: none;
            font-size: 12px;
            color: #0b0217;
            cursor: pointer;
        }
        .button{
            background: rgb(174, 174, 245);
            margin-top: 30px;
            width: 100%;
            padding: 10px 0;
            border-radius: 10px;
        }
        .login-signup{
            font-size: 12px;
            text-align: center;
            margin-top: 15px;
        }
        .forgot_pass{
            color: rgb(174, 174, 245);
            text-decoration: none;
            font-size: 0.8rem;
            font-style: italic;
        }
        .forgot_pass:hover{
            text-decoration: underline;
        }
        .signup-txt{
            font-size:1rem;
            text-decoration: none;
            color: rgb(174, 174, 245);
        }
        .signup-txt:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container-fluid form login-form">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <form action="#">
                    <h2>Register</h2>
                    <div class="input-box">
                        <input type="text" id="username" placeholder="Enter username" class="form-control" name="r_username" required>
                        <i class="fa-solid fa-user email"></i>
                    </div>
                    <div class="input-box">
                        <input type="email" id="email" placeholder="Enter email" class="form-control" name="r_email" required>
                        <i class="fa-solid fa-envelope email"></i>
                    </div>
                    <div class="input-box">
                        <input type="email" id="email" placeholder="Enter phone number" class="form-control" name="r_phone" required>
                        <i class="fa-solid fa-phone email"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Enter Password" id="password" class="form-control" name="r_pass" required>
                        <i class="fa-solid fa-lock password"></i>
                        <i class="toggle-password fa-solid fa-eye-slash pwd_hide" onclick="togglePasswordVisibility('password')" style="color:#707070; font-size: 0.9rem;"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Re-type Password" id="con_password" class="form-control" name="r_con_pass" required>
                        <i class="fa-solid fa-lock password"></i>
                        <i class="toggle-password fa-solid fa-eye-slash pwd_hide" onclick="togglePasswordVisibility('con_password')" style="color:#707070; font-size: 0.9rem;"></i>
                    </div>
                    <button class="button">Register</button>
                    <div class="login-signup">
                        Don't have an account? <a href="login.php" class="signup-txt">Signin</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
</body>
</html>