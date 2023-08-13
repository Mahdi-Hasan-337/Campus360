<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="modal-close-btn" data-bs-dismiss="modal" aria-label="Close">&times</button>
        <?php
          include 'config.php';
          $email = $_SESSION['l_email'];
          $allData = mysqli_query($conn, "SELECT * FROM `register` WHERE db_email='$email'");

          while($row = mysqli_fetch_array($allData))
          {
            $image_path = '';
            $default_image = 'assets/images/campusdotcrew.png';
            if (!empty($row['db_image'])) {
              $image_path = 'assets/uploads/' . $row['db_image'];
            } else {
              $image_path = $default_image;
            }

            echo "
              <div class='text-center mt-5'>
                <img src='$image_path' alt='Avatar' class='img-fluid rounded-circle' style='width:4rem; height:4rem;'>
                <h4 class='mt-3' style='text-transform:uppercase'>$row[db_username]</h4>
                <h5>$row[db_email]</h5>
                <h5>$row[db_phone]</h5>
                <div class='d-flex' style='align-items:center; justify-content:center;'>";

                $fb = $row['fb'];
                $telegram = $row['telegram'];
                $github = $row['github'];

                if (filter_var($fb, FILTER_VALIDATE_URL)) {
                    echo "<a href='$fb' target='_blank'><i class='social-icon fab fa-facebook-f m-3' title='Facebook'></i></a>";
                } else {
                    echo "<i class='social-icon fab fa-facebook-f m-3'></i>";
                }

                if (filter_var($telegram, FILTER_VALIDATE_URL)) {
                    echo "<a href='$telegram' target='_blank'><i class='social-icon fab fa-telegram m-3' title='Telegram'></i></a>";
                } else {
                    echo "<i class='social-icon fab fa-telegram m-3'></i>";
                }

                if (filter_var($github, FILTER_VALIDATE_URL)) {
                    echo "<a href='$github' target='_blank'><i class='social-icon fa-brands fa-github m-3' title='Github'></i></a>";
                } else {
                    echo "<i class='social-icon fa-brands fa-github m-3'></i>";
                }
                
            echo "
                </div>
                <button type='button' class='col-12 btn btn-primary mt-3 p-2 updatebtn' data-user-id='$row[id]' data-bs-dismiss='modal' style='margin-right:1rem;'><i class='fa-solid fa-pen-to-square'></i>  UPDATE PROFILE</button>
                <button type='button' class='col-12 btn btn-danger mt-3 p-2 deletebtn' data-user-id='$row[id]' data-bs-dismiss='modal' style='margin-right:1rem;'><i class='fa-solid fa-trash'></i>  DELETE YOUR ACCOUNT</button>
              </div>
            ";
          }
        ?>
      </div>
    </div>
  </div>
</div>

<style>
 .social-icon{
  display:flex; 
  align-items:center; 
  Justify-content:center; 
  background:rgb(243, 238, 238); 
  height:3rem; 
  width:3rem; 
  padding: 0.5rem; 
  font-size: 1.2rem; 
  border-radius:50%;
  color: black;
  cursor: pointer;
 }
</style>
