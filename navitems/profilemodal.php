<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <!-- <button type="button" class="modal-close-btn" data-bs-dismiss="modal" aria-label="Close">&times</button>       -->
          <?php
            include 'config.php';
            $username = $_SESSION['l_username'];
            $allData = mysqli_query($conn, "SELECT * FROM `register` WHERE db_username='$username'");

            while($row = mysqli_fetch_array($allData))
            {
              echo "
                <div class='text-center mt-5'>
                  <img src='images/campusdotcrew.png' alt='Avatar' class='img-fluid rounded-circle' style='width:4rem; height:4rem;'>
                  <h2 style='display:none;''>$row[id]</h2>
                  <h2>$row[db_username]</h2>
                  <h5>$row[db_email]</h5>
                  <h5>$row[db_phone]</h5>
                </div>
              ";
            }
          ?>
       

          <a href="updateprofileModal" data-bs-target="#updateprofilemodal" data-bs-toggle="modal" data-bs-dismiss="modal" class="col-12 btn btn-primary mt-3"><i class="fa-solid fa-pen-to-square"></i>  Update profile</a>
          <button type="button" class="col-12 btn btn-secondary mt-3" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
