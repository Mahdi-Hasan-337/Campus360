<?php 
//session_start(); 
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 px-1">
  <div class="container-fluid">
    <img class="logo" src="images/campusdotcrew.png" alt="">
    <a class="navbar-brand logo-name" href="index.php">Campus Dot Crew</a>
    <button class="navbar-toggler white-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="reverse collapse navbar-collapse" id="navbarNav">
      <div class="element2 ms-auto">
        <ul class="navbar-nav justify-content-center">
          <li class="n-item nav-item text-center">
            <a class="li-item nav-link active home" aria-current="page" href="#">Home</a>
          </li>
          <li class="n-item nav-item dropdown d-menu">
            <a class="li-item nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Courses</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="d-item dropdown-item" href="#">Action</a></li>
              <hr>
              <li><a class="d-item dropdown-item" href="#">Another action</a></li>
              <hr>
              <li><a class="d-item dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="n-item nav-item text-center">
            <a class="li-item nav-link" href="#">Job Preparation</a>
          </li>
          <li class="n-item nav-item text-center">
            <a class="li-item nav-link" href="#" tabindex="-1" aria-disabled="true">Routine</a>
          </li>
          <li class="n-item nav-item text-center">
            <a class="li-item nav-link" href="#" tabindex="-1" aria-disabled="true">Vlog</a>
          </li>
          <!-- Search bar -->
          <li class="li-item s-li-icon n-item nav-item dropdown d-menu">
            <a href="#" style="text-decoration:none;" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="s-icon li-item fa-solid fa-magnifying-glass" style="color:white"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" id="search-menu">
              <li>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="element3 d-flex" style="align-items: center;">
        <?php if (isset($_SESSION['l_username'])) { ?>
          <!-- Code for the logged-in user -->
          <ul class="navbar-nav justify-content-center">
            <li class="nav-item dropdown d-menu">
              <a class="li-item nav-link dropdown dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="images/campusdotcrew.png" class="rounded-circle" alt="Avatar" loading="lazy" style="height: 2.5rem; width: 2.5rem;">
              </a>              
              <ul class="dropdown-menu dropdown-menu-end" style="width: 17rem; padding: 2rem 2rem 0rem 2rem;" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <img src="images/campusdotcrew.png" class="text-center p-pic rounded-circle" alt="Avatar" loading="lazy" style="height: 3rem; width: 3rem; display: block; margin: 0 auto; text-align: center;">
              </li>
              <li class="text-center" style="font-size:1.5rem; font-weight:bold;">Campus Dot Crew</li>
              <hr>
              <li>
                <a href="#" style="text-decoration:none;color:black;">
                  <div class="container-content" style="margin-bottom: 20px;">
                    <div class="profile d-flex">
                      <div class="d-flex icon-txt" style="margin-right: 1rem;">
                        <i class="p-icon fa-solid fa-pen-to-square"></i> <pre> </pre><span class="p-txt" style="font-size:1.2rem;font-weight: 700;">Update Profile</span>
                      </div>
                      <div class="arrow"><span style="font-size:1.25rem;margin-right:0.25rem;">></span></div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" style="text-decoration:none;color:black;">
                  <div class="container-content" style="margin-bottom: 20px;">
                    <div class="profile d-flex">
                      <div class="d-flex icon-txt" style="margin-right: 1rem;">
                        <i class="p-icon fa-solid fa-gear"></i> <pre> </pre><span class="p-txt" style="font-size:1.2rem;font-weight: 700;">Settings</span>
                      </div>
                      <div class="arrow"><span style="font-size:1.25rem;margin-right:0.25rem;">></span></div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="include/logout.php" style="text-decoration:none;color:black;">
                  <div class="container-content" style="margin-bottom: 20px;">
                    <div class="profile d-flex">
                      <div class="d-flex icon-txt" style="margin-right: 1rem;">
                        <i class="p-icon fa-solid fa-arrow-right-from-bracket"></i> <pre> </pre><span class="p-txt" style="font-size:1.2rem;font-weight: 700;">Logout</span>
                      </div>
                      <div class="arrow"><span style="font-size:1.25rem;margin-right:0.25rem;">></span></div>
                    </div>
                  </div>
                </a>
              </li>
            </li>
          </ul>
        <?php } else { ?>
          <!-- Code for the not logged-in user -->
          <a class="login-btn nav-link text-center" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Login</a>
        <?php } ?>
      </div>
    </div>
  </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form action="include/loginAction.php" method="post">
          <button type="button" class="modal-close-btn" style="" data-bs-dismiss="modal" aria-label="Close">&times</button>
          <h2>Login</h2>
          <div class="input-box">
            <input type="text" id="username" placeholder="Enter username" class="form-control" name="l_username" required>
            <i class="fa-solid fa-envelope email"></i>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Enter Password" id="password" class="form-control" name="l_pass" required>
            <i class="fa-solid fa-lock password"></i>
            <i class="toggle-password fa-solid fa-eye-slash pwd_hide" onclick="togglePasswordVisibility('password')" style="color:#707070; font-size: 0.9rem;"></i>
          </div>
          <div class="option-field">
            <span class="checkbox">
              <input type="checkbox" id="check">
              <label for="check">Remember me</label>
            </span>
            <a href="#" class="forgot_pass">Forgot Password?</a>
          </div>
          <button class="button">Login</button>
          <div class="login-signup">
            Already have an account?
            <a class="signup-txt" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Signup</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form action="helper/registerAction.php" method="post">
        <button type="button" class="modal-close-btn" style="" data-bs-dismiss="modal" aria-label="Close">&times</button>
          <!-- <button type="button" class="modal-close-btn btn-close" style="margin-right:2rem; margin-top:2rem;" data-bs-dismiss="modal" aria-label="Close"></button> -->
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
              Don't have an account?
              <a class="signup-txt" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Signin</a>
          </div>
        </form>
      </div>
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