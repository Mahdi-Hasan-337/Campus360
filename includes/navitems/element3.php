<?php if (isset($_SESSION['l_email'])) { ?>

<!-- If logged in -->
<ul class="navbar-nav justify-content-center">
  <li class="nav-item dropdown d-menu">
    <a class="li-item nav-link dropdown dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <?php include 'image_load.php'; ?>
    </a>              
    
    <ul class="dropdown-menu dropdown-menu-end" style="width: 15rem; padding: 2rem 2rem 0rem 2rem;" aria-labelledby="navbarDropdownMenuLink">
    
    <li>
      <?php include 'image_load.php'; ?>
    </li>

    <li class="text-center" style="font-size:1.2rem; font-weight:bold; text-transform:uppercase; ">
      <?php include 'name_load.php'; ?>
    </li>

    <hr>

    <li>
      <a href="profileModal" data-bs-toggle="modal" data-bs-target="#profileModal" style="text-decoration:none;color:black;">
        <div class="container-content" style="margin-bottom: 1.25rem;">
          <div class="profile d-flex">
            <div class="col-9 d-flex icon-txt" style="margin-right: 1rem;">
              <i class="col-3 fa-solid fa-user rounded-circle" style="background:rgb(243, 238, 238); padding: 0.5rem; font-size: 1.2rem;"></i> 
              <pre> </pre>
              <span class="col-8 p-txt" style="font-size:1.0rem;font-weight: 700;">Profile</span>
            </div>
            <div class="col-1 arrow"><span style="font-size:1.25rem;margin-right:0.25rem;">></span></div>
          </div>
        </div>
      </a>
    </li>

    <li>
      <a href="logoutModal" data-bs-toggle="modal" data-bs-target="#logoutModal" style="text-decoration:none;color:black;">
        <div class="container-content" style="margin-bottom: 1.25rem;">
          <div class="profile d-flex">
            <div class="col-9 d-flex icon-txt" style="margin-right: 1rem;">
              <i class="col-3 p-icon fa-solid fa-arrow-right-from-bracket rounded-circle" style="background:rgb(243, 238, 238); padding: 0.5rem; font-size: 1.2rem;"></i>
              <pre> </pre>
              <span class="col-8 p-txt" style="font-size:1.0rem;font-weight: 700;">Logout</span>
            </div>
            <div class="col-1 arrow"><span style="font-size:1.25rem;margin-right:0.25rem;">></span></div>
          </div>
        </div>
      </a>
    </li>
  </li>
</ul>
<?php } else { ?>
<!-- If not logged in -->
<a class="login-btn nav-link text-center" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Login</a>
<?php } ?>