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
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="updateAction.php" method="POST" enctype="multipart/form-data">

        <div class="mb-4">
            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <h2 class="modal-title text-center mb-2" id="updatemodalLabel">Update Profile</h2>            

        <div class="modal-body">

        <input type="hidden" name="update_id" id="update_id">
    
        <div class="mb-3">
          <?php
            $image_path = 'uploads/' . $row['db_image'];
            $default_image = 'images/campusdotcrew.png';
            $image_src = file_exists($image_path) ? $image_path : $default_image;
          ?>
          <img width="150px" src="<?php echo $image_src; ?>" id="image-preview" alt="Image Preview"
            style="display: block; margin: 1rem auto;">
          <input type="file" name="image" id="image" class="form-control" onchange="previewImage();" accept="image/*">
        </div>

          <div class="row g-3 align-items-center mb-3">
            <div class="col-3">
              <label class="form-label">Name</label>
            </div>
            <div class="col-9">
              <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
            </div>
          </div>

          <div class="row g-3 align-items-center mb-3">
            <div class="col-3">
              <label class="form-label">Email</label>
            </div>
            <div class="col-9">
              <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email" readonly>
            </div>
          </div>

          <div class="row g-3 align-items-center mb-3">
            <div class="col-3">
              <label class="form-label">Phone</label>
            </div>
            <div class="col-9">
              <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone">
            </div>
          </div>

          <button type="submit" name="updatedata" class="col-12 btn btn-primary mb-3 p-2">update</button>
          <button type="button" class="col-12 btn btn-secondary p-2" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>