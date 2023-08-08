<?php include 'indexitems/header_code.php';?>
<?php include 'indexitems/nav.php'; ?>

<?php if(isset($_SESSION['status'])) { ?>
    <div class="alert-container">
        <div class="alert alert-danger auto-hide">
            <h5><?= $_SESSION['status'] ?></h5>
        </div>
    </div>
<?php unset($_SESSION['status']); } ?>

<?php include 'indexitems/carousel.php'; ?>
<?php include 'indexitems/team.php'; ?>
<?php include 'indexitems/footer.php'; ?>
<?php include 'indexitems/footer_code.php'; ?>