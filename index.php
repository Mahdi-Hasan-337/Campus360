<?php include 'indexitems/header.php';?>
<?php include 'indexitems/nav.php'; ?>

<?php if(isset($_SESSION['status'])) { ?>
    <div class="alert-container">
        <div class="alert alert-danger auto-hide-alert">
            <h5><?= $_SESSION['status'] ?></h5>
        </div>
    </div>
<?php unset($_SESSION['status']); } ?>

<?php include 'indexitems/carousel.php'; ?>
<?php // include 'indexitems/otherhome.php'; ?>
<?php include 'indexitems/student.php'; ?>
<?php include 'indexitems/foot.php'; ?>
<?php include 'indexitems/footer.php'; ?>