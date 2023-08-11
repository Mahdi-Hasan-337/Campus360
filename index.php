<?php include './includes/indexitems/header_code.php'; ?>
<?php include './includes/indexitems/nav.php'; ?>
<?php if(isset($_SESSION['status'])) { ?>
    <div class="alert-container">
        <div class="alert alert-danger auto-hide">
            <h5><?= $_SESSION['status'] ?></h5>
        </div>
    </div>
<?php unset($_SESSION['status']); } ?>
<?php include './includes/indexitems/carousel.php'; ?>
<?php include './includes/indexitems/team.php'; ?>
<?php include './includes/indexitems/footer.php'; ?>
<?php include './includes/indexitems/footer_code.php'; ?>