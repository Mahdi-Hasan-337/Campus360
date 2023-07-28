<!-- Login Modal -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form action="loginAction.php" method="post">
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