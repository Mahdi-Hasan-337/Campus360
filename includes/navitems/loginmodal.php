<!-- Login Modal Modal -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form action="includes/action/loginAction.php" method="post">
          <button type="button" class="modal-close-btn" data-bs-dismiss="modal" aria-label="Close">&times</button>
          <h2>Login</h2>
          <div class="input-box">
            <input type="email" id="email" placeholder="Enter Email" class="form-control" name="l_email" required>
            <i class="fa-solid fa-envelope email"></i>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Enter Password" id="password" class="form-control" name="l_pass" required>
            <i class="fa-solid fa-lock password"></i>
            <i class="toggle-password fa-solid fa-eye-slash pwd_hide" onclick="passowrdToggole('password')" style="color:#707070; font-size: 0.9rem;"></i>
          </div>
          <div class="option-field">
            <span class="checkbox">
              <input type="checkbox" id="check">
              <label for="check">Remember me</label>
            </span>
            <a class="forgot_pass" data-bs-target="#reset_pass_modal" data-bs-toggle="modal" data-bs-dismiss="modal" style="cursor:pointer; font-style:italic;">Forgot Password?</a>
          </div>
          <button class="button" name="login_btn">Login</button>
          <div class="login-signup">
            Already have an account?
            <a class="signup-txt" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal" style="cursor:pointer">Signup</a>
          </div>
          <hr>
          <div class="resend-div text-center">
            You are already registerd but not verified? Click
            <a class="signup-txt" data-bs-target="#resend_email_modal" data-bs-toggle="modal" data-bs-dismiss="modal" style="cursor:pointer; font-style:italic;">here</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>