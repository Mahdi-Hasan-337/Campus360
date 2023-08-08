<?php include 'indexitems/header.php';?>
<?php include 'indexitems/nav.php'; ?>
<div class="alert">
    <?php if(isset($_SESSION['status'])) { ?>
        <div class="alert alert-danger">
            <h5><?= $_SESSION['status'] ?></h5>
        </div>
    <?php unset($_SESSION['status']); } ?>
</div>
<?php include 'indexitems/carousel.php'; ?>
<?php // include 'indexitems/otherhome.php'; ?>
<?php include 'indexitems/student.php'; ?>
<?php include 'indexitems/foot.php'; ?>
<?php include 'indexitems/footer.php'; ?>