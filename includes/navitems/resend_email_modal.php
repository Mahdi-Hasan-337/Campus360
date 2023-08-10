<!-- Resend Email Modal -->
<div class="modal fade" id="resend_email_modal" aria-hidden="true" aria-labelledby="resend_email_modalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body" style="padding:2rem;">
        <form action="resend_email_action.php" method="post">
          <button type="button" class="modal-close-btn" data-bs-dismiss="modal" aria-label="Close">&times</button>
          <h2 class="text-center">Resend Email</h2>
          <div class="input-box">
            <input type="email" id="remail" placeholder="Enter your Email Address" class="form-control" name="remail" required>
            <i class="fa-solid fa-envelope email"></i>
          </div>
          <button class="button" name="remail_btn">Resend</button>
          <button class="button" style="background-color:#f7f7f7" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>