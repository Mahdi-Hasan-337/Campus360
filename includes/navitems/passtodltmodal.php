<!-- Password Delete Modal -->
<div class="modal fade" id="passtodltmodal" aria-hidden="true" aria-labelledby="passtodltmodalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body" style="padding: 2rem;">
        <form action="includes/action/passtodltAction.php" method="post">
          <button type="button" class="modal-close-btn" data-bs-dismiss="modal" aria-label="Close">&times</button>
          <h2 class="text-center">Type your password</h2>
          <input type="hidden" name="passtodlt_id" id="passtodlt_id">
          <div class="input-box">
            <input type="password" placeholder="Enter Password" id="dlt_pass" class="form-control" name="dlt_pass" required>
            <i class="fa-solid fa-lock password"></i>
            <i class="toggle-password fa-solid fa-eye-slash pwd_hide" onclick="togglePasswordVisibility('dlt_pass')" style="color:#707070; font-size: 0.9rem;"></i>
          </div>
          <p class="text-danger mt-3"><i class="fa-solid fa-triangle-exclamation"></i> By clicking 'Submit' your account will be deleted permanently and cannot be restored.</p>
          <button class="button" name="passtodlt_btn">Submit</button>
          <button class="button" style="background-color:#f7f7f7" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
