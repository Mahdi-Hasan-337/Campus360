<?php if(isset($_SESSION['status'])) { ?>
    <div class="alert-container">
        <div class="alert alert-danger auto-hide">
            <h5><?= $_SESSION['status'] ?></h5>
        </div>
    </div>
<?php unset($_SESSION['status']); } ?>