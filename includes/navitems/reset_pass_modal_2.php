<?php include '../indexitems/header_code.php'; ?>
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab:wght@700&family=Roboto:ital,wght@1,500&display=swap');
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
      body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
      }
      form {
        padding: 20px;
        width: 500px;
        border: 1px solid #7d2ae8;
        border-radius: 1.5rem;
      }
      h2 {
        text-align: center;
      }
      .input-box {
        position: relative;
        margin-top: 30px;
        width: 100%;
        height: 40px;
      }
      .input-box input {
        height: 100%;
        width: 100%;
        border: none;
        outline: none;
        padding: 0 30px;
        color: #333;
        transition: all 0.2s ease;
        border-bottom: 1.5px solid #aaaaaa;
        border-color: #7d2ae8;
      }
      .input-box input:focus {
        border-color: #7d2ae8;
        outline:none;
      }
      .form-control:focus {
      border-color: #7d2ae8;
      outline: none;
      box-shadow: none;
      }
      .input-box i {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
      }
      .input-box i.email,
      .input-box i.password {
        left: 0px;
        color: #707070;
      }
      .input-box input:focus~i.email,
      .input-box input:focus~i.password {
        color: #7d2ae8;
      }
      .input-box i.pwd_hide {
        right: 0;
        font-size: 18px;
      }
    </style>

    <form action="reset_pass_action.php" method="POST">

      <h2>Reset Password</h2>
      <input type="hidden" name="password_token" value="<?php if (isset($_GET['token'])) {echo $_GET['token']; } ?>">

      <div class="alert">
          <?php if(isset($_SESSION['status'])) { ?>
              <div class="alert alert-danger">
                  <h5><?= $_SESSION['status'] ?></h5>
              </div>
          <?php unset($_SESSION['status']); } ?>
      </div>

      <div class="input-box">
        <input type="email" name="email" value="<?php if (isset($_GET['email'])) {
          echo $_GET['email'];
        } ?>" class="form-control" readonly>
        <i class="fa-solid fa-envelope email"></i>
      </div>

      <div class="input-box">
        <input type="password" placeholder="Enter New Password" id="password" class="form-control" name="new_password" required>
        <i class="fa-solid fa-lock password"></i>
        <i class="toggle-password fa-solid fa-eye-slash pwd_hide" onclick="togglePasswordVisibility('password')" style="color:#707070; font-size: 0.9rem;"></i>
      </div>

      <div class="input-box">
          <input type="password" placeholder="Retype Password" id="confirm_password" class="form-control" name="confirm_password" required>
          <i class="fa-solid fa-lock password"></i>
          <i class="toggle-password fa-solid fa-eye-slash pwd_hide" onclick="togglePasswordVisibility('confirm_password')" style="color:#707070; font-size: 0.9rem;"></i>
      </div>

      <div class="form-group">
        <button type="submit" name="uppass_btn" class="btn btn-primary text-center col-12 mt-4" style="border-radius: 1rem">update Password</button>
      </div>
    </form>

<?php include '../indexitems/footer_code.php'; ?>