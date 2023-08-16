<!-- Error Alert -->
<?php if(isset($_SESSION['status'])) { ?>
    <div class="alert-container show">
        <div class="alert alert-danger auto-hide">
            <h5 style="color:red"><?= $_SESSION['status'] ?></h5>
        </div>
    </div>
<?php unset($_SESSION['status']); } ?>

<!-- Success Alert -->
<?php if(isset($_SESSION['p_status'])) { ?>
    <div class="alert-container show">
        <div class="alert alert-success auto-hide">
            <h5 style="color:green"><?= $_SESSION['p_status'] ?></h5>
        </div>
    </div>
<?php unset($_SESSION['p_status']); } ?>