<!-- Update Profile Modal -->

<?php
  include('config.php');

  if (isset($_SESSION['l_email'])) {
      $l_email = $_SESSION['l_email'];
      $query = "SELECT * FROM `register` WHERE db_email='$l_email' LIMIT 1";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
      }
  }
?>

<div class="modal fade" id="updateprofilemodal" aria-hidden="true" aria-labelledby="updateprofilemodalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <form action="includes/action/updateAction.php" method="POST" enctype="multipart/form-data">
        <div class="mb-4" style="display:flex;justify-content:space-between">
          <a class="signup-txt" data-bs-target="#profileModal" data-bs-toggle="modal" data-bs-dismiss="modal" style="cursor:pointer; text-decoration:none;color:black;"><span style="font-size:1.5rem;"><</span></a>
          <button type="button" class="modal-close-btn float-end" data-bs-dismiss="modal" aria-label="Close">&times</button>
        </div>
        <h2 class="modal-title text-center mb-2" id="updatemodalLabel">Update Profile</h2>            

        <div class="modal-body">

        <input type="hidden" name="update_id" id="update_id" value="<?php echo $row['id']; ?>">
    
        <div class="mb-3">
            <?php
            $default_image = 'images/default_profile.jpg';
            $db_image = $row['db_image'];
            $image_path = 'assets/uploads/' . $db_image;
            $image_src = file_exists($image_path) ? $image_path : $default_image;
            ?>
            <img src="<?php echo $image_src; ?>" id="image-preview" alt="Image Preview" style="width: 10rem; height: 10rem; display: block; margin: 1rem auto; object-fit: cover;">
            <input type="file" name="image" id="image" class="form-control" onchange="updateImagePreview();" accept="image/*">
        </div>

        <div class="full d-flex justify-content-between">
          <div class="full1 col-6" style="padding-right:0.5rem;">

            <div class="row g-3 align-items-center mb-3">
              <div class="col-3">
                <label class="form-label">Name</label>
              </div>
              <div class="col-9">
                <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Name" value="<?php echo $row['db_username']; ?>">
              </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
              <div class="col-3">
                <label class="form-label">Email</label>
              </div>
              <div class="col-9">
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email" value="<?php echo $row['db_email']; ?>" readonly>
              </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
              <div class="col-3">
                <label class="form-label">Phone</label>
              </div>
              <div class="col-9">
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone" value="<?php echo $row['db_phone']; ?>">
              </div>
            </div>
          </div>
          
          <div class="full2 col-6" style="padding-left:0.5rem;">
            <div class="row g-3 align-items-center mb-3">
              <div class="col-3">
                <label class="form-label">Facebook</label>
              </div>
              <div class="col-9">
                <input type="text" name="facebook" id="facebook" class="form-control" placeholder="Enter Facebook Account Link" value="<?php echo $row['fb']; ?>">
              </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
              <div class="col-3">
                <label class="form-label">Telegram</label>
              </div>
              <div class="col-9">
                <input type="text" name="telegram" id="email" class="form-control" placeholder="Enter Telegram Account Link" value="<?php echo $row['telegram']; ?>">
              </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
              <div class="col-3">
                <label class="form-label">Github</label>
              </div>
              <div class="col-9">
                <input type="text" name="github" id="phone" class="form-control" placeholder="Enter Github Account Link" value="<?php echo $row['github']; ?>">
              </div>
            </div>
          </div>
        </div>
        <button type="submit" name="updatedata" class="col-12 btn btn-primary mb-3 p-2"><i class='fa-solid fa-pen-to-square'></i>  UPDATE</button>
        </div>
      </form>
    </div>
  </div>
</div>