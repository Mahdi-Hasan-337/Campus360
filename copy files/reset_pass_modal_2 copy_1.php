<!-- Reset password Modal -->
<div class="modal fade" id="reset_pass_modal_2" aria-hidden="true" aria-labelledby="reset_pass_modal_2Label" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body" style="padding:2rem;">
        <form action="reset_pass_action.php" method="POST">
            <input type="hidden" name="password_token" value="<?php if(isset($_GET['token'])){echo $_GET['token'];} ?>">
           
            <div class="form-group mb-3">
                <label for="">Email Address</label>
                <input type="email" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>" class="form-control" readonly>
            </div>
            
            <div class="form-group mb-3">
                <label for="">New Passowrd</label>
                <!-- <input type="password" name="password" class="form-control"> -->
                <input type="password" placeholder="Enter Password" id="password" class="form-control" name="new_password" required>

            </div>
            
            <div class="form-group mb-3">
                <label for="">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
            </div>
            
            <div class="form-group">
                <button type="submit" name="uppass_btn" class="btn btn-primary text-center col-12">update Password</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>