<!-- Register Modal -->
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form action="registerAction.php" method="post">
        <button type="button" class="modal-close-btn" data-bs-dismiss="modal" aria-label="Close">&times</button>
          <h2>Register</h2>
          <div class="alert">
            <?php if(isset($_SESSION['status'])) { ?>
                <div class="alert alert-danger">
                    <h5><?= $_SESSION['status'] ?></h5>
                </div>
            <?php unset($_SESSION['status']); } ?>
          </div>
          <div class="input-box">
            <input type="text" id="username" placeholder="Enter username" class="form-control" name="r_username" required>
            <i class="fa-solid fa-user email"></i>
          </div>
          <div class="input-box">
              <input type="email" id="email" placeholder="Enter email" class="form-control" name="r_email" required>
              <i class="fa-solid fa-envelope email"></i>
          </div>
          <div class="input-box">
              <input type="text" id="phone" placeholder="Enter phone number" class="form-control" name="r_phone" required>
              <i class="fa-solid fa-phone email"></i>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Enter Password" id="r_password" class="form-control" name="r_pass" required>
            <i class="fa-solid fa-lock password"></i>
            <i class="toggle-password fa-solid fa-eye-slash pwd_hide" onclick="togglePasswordVisibility('r_password')" style="color:#707070; font-size: 0.9rem;"></i>
          </div>
          <div class="input-box">
              <input type="password" placeholder="Re-type Password" id="con_password" class="form-control" name="r_con_pass" required>
              <i class="fa-solid fa-lock password"></i>
              <i class="toggle-password fa-solid fa-eye-slash pwd_hide" onclick="togglePasswordVisibility('con_password')" style="color:#707070; font-size: 0.9rem;"></i>
          </div>
          <button class="button" name="register_btn">Register</button>
          <div class="login-signup">
              Don't have an account?
              <a class="signup-txt" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal" style="cursor:pointer;">Signin</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>