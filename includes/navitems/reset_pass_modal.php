<!-- Reset password Modal -->
<div class="modal fade" id="reset_pass_modal" aria-hidden="true" aria-labelledby="reset_pass_modalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body" style="padding:2rem;">
        <form action="includes/action/reset_pass_action.php" method="post">
          <button type="button" class="modal-close-btn" data-bs-dismiss="modal" aria-label="Close">&times</button>
          <h2 class="text-center">Reset Password</h2>
          <div class="input-box">
            <input type="email" id="repass_email" placeholder="Enter your Email Address" class="form-control" name="repass_email" required>
            <i class="fa-solid fa-envelope email"></i>
          </div>
          <button class="button" name="repass_btn">Submit</button>
          <button class="button" style="background-color:#f7f7f7" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>