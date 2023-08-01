  <!-- Profile Modal -->
  <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <?php
            include 'config.php';
            $email = $_SESSION['l_email'];
            $allData = mysqli_query($conn, "SELECT * FROM `register` WHERE db_email='$email'");

            while($row = mysqli_fetch_array($allData))
            {
              echo "
                <div class='text-center mt-5'>
                  <img src='images/campusdotcrew.png' alt='Avatar' class='img-fluid rounded-circle' style='width:4rem; height:4rem;'>
                  <!-- Include the user ID as a data attribute in the Edit button -->
                  <h2>$row[db_username]</h2>
                  <h5>$row[db_email]</h5>
                  <h5>$row[db_phone]</h5>
                  <button type='button' class='col-12 btn btn-primary mt-3 p-2 updatebtn' data-user-id='$row[id]' data-bs-dismiss='modal' style='margin-right:1rem;'><i class='fa-solid fa-pen-to-square'></i> Update Profile</button>
                  <button type='button' class='col-12 btn btn-danger mt-3 p-2 deletebtn' data-user-id='$row[id]' data-bs-dismiss='modal' style='margin-right:1rem;'><i class='fa-solid fa-trash-can-xmark'></i> Delete your account</button>
                </div>
              ";
            }
          ?>
          <button type="button" class="col-12 btn btn-secondary mt-3 p-2" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>