<?php include '../indexitems/header_code.php'; ?>
<link rel="stylesheet" href="../../assets/css/nav/reset_pass_modal_2.css">

  <form action="../action/reset_pass_action.php" method="POST">
    <h2>Reset Password</h2>
    <input class="col-12" type="hidden" name="password_token" value="<?php if (isset($_GET['token'])) {echo $_GET['token']; } ?>" readonly>

    <?php include '../indexitems/alert.php'?>

    <div class="input-box">
      <input type="email" name="email" value="<?php if (isset($_GET['email'])) {
        echo $_GET['email'];
      } ?>" class="form-control" readonly>
      <i class="fa-solid fa-envelope email"></i>
    </div>

    <div class="input-box">
      <input type="password" placeholder="Enter New Password" id="password" class="form-control" name="new_password" required>
      <i class="fa-solid fa-lock password"></i>
      <i class="toggle-password fa-solid fa-eye-slash pwd_hide" onclick="passowrdToggole('password')" style="color:#707070; font-size: 0.9rem;"></i>
    </div>

    <div class="input-box">
        <input type="password" placeholder="Retype Password" id="confirm_password" class="form-control" name="confirm_password" required>
        <i class="fa-solid fa-lock password"></i>
        <i class="toggle-password fa-solid fa-eye-slash pwd_hide" onclick="passowrdToggole('confirm_password')" style="color:#707070; font-size: 0.9rem;"></i>
    </div>

    <div class="form-group">
      <button type="submit" name="uppass_btn" class="btn btn-primary text-center col-12 mt-4" style="border-radius: 1rem">update Password</button>
    </div>
  </form>

  <script src="../../assets/js/nav.js"></script>

<?php include '../indexitems/footer_code.php'; ?>