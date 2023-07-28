<!-- Update Profile Modal 2 -->

<?php
   include 'config.php';
   $id = $_GET['id'];
   $fetcheQuery = "SELECT `id`, `db_username`, `db_email`, `db_phone`, `db_image` FROM `register` WHERE id='$id'";
   $allData = mysqli_query($conn, $fetcheQuery);
   $arrayData = mysqli_fetch_array($allData);
?>
<div class="modal fade" id="updateprofilemodal" aria-hidden="true" aria-labelledby="updateprofilemodalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <form action="updateAction.php" method ="post" enctype='multipart/form-data'>
                            <h5 style="text-align:center; font-weight: bold; font-size: 2rem;">Update Profile</h5>
                            <hr>
                            <div class="row g-3 align-items-center" style="display:none;">
                                <div class="col-3">
                                    <label for="Serial" class="col-form-label">ID</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" readonly class="form-control" name="id" value="<?php echo $arrayData['id']?>">
                                </div>
                            </div>
                            
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="Name" class="col-form-label">Name</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" style= "margin-top:.2rem; border-radius:.5rem; padding:.5rem;" name="name" value="<?php echo $arrayData['db_username']?>">
                                </div>
                            </div>

                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="Email" class="col-form-label">Email</label>
                                </div>
                                <div class="col-9">
                                    <input type="email" class="form-control" style= "margin-top:.2rem; border-radius:.5rem; padding:.5rem;" name="name" value="<?php echo $arrayData['db_email']?>">
                                </div>
                            </div>

                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="phone" class="col-form-label">Phone</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" style="margin-top:.2rem; border-radius:.5rem; padding:.5rem;" name="email" value="<?php echo $arrayData['db_phone']?>">
                                </div>
                            </div>

                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="image" class="col-form-label">Image</label>
                                </div>
                                <div class="col-9">
                                    <input type="file" name="image" id="image" style="margin-top:.2rem; background: white; border-radius:.5rem; width: 100%; padding:.5rem;">
                                </div>
                            </div>   
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="image" class="col-form-label"></label>
                                </div>
                                <div class="col-9">
                                    <img width="150px" id="image-preview" src="<?php echo $arrayData['db_image']?>" alt="Image Preview" style="display: block; margin: 1rem auto;"/>
                                </div>
                            </div>                
                            <button type="button" class="btn btn-primary col-12">Update</button>
                            <button type="button" class="col-12 btn btn-secondary mt-3" data-bs-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
          <!-- <a type="button" class="col-12 btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#profileModal" data-bs-dismiss="modal">Go to profile</a> -->
        </div>
    </div>
  </div>
</div>