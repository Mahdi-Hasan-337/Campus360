<?php if (isset($_SESSION['l_email'])) { ?>
          <!-- If logged in -->
          <ul class="navbar-nav justify-content-center">
            <li class="nav-item dropdown d-menu">
              <a class="li-item nav-link dropdown dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="images/campusdotcrew.png" class="rounded-circle" alt="Avatar" loading="lazy" style="height: 2.5rem; width: 2.5rem;">
              </a>              
              <ul class="dropdown-menu dropdown-menu-end" style="width: 17rem; padding: 2rem 2rem 0rem 2rem;" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <img src="images/campusdotcrew.png" class="text-center p-pic rounded-circle" alt="Avatar" loading="lazy" style="height: 3rem; width: 3rem; display: block; margin: 0 auto; text-align: center;">
              </li>
              <li class="text-center" style="font-size:1.5rem; font-weight:bold;">
                <?php
                  include 'config.php';
                  $email = $_SESSION['l_email'];
                  $allData = mysqli_query($conn, "SELECT * FROM `register` WHERE db_email='$email'");

                  while($row = mysqli_fetch_array($allData))
                  {
                    echo "$row[db_username]";
                  }
                ?>
              </li>
              <hr>
              <li>
                <a href="profileModal" data-bs-toggle="modal" data-bs-target="#profileModal" style="text-decoration:none;color:black;">
                  <div class="container-content" style="margin-bottom: 20px;">
                    <div class="profile d-flex">
                      <div class="d-flex icon-txt" style="margin-right: 1rem;">
                        <i class="fa-solid fa-user"></i> <pre> </pre><span class="p-txt" style="font-size:1.2rem;font-weight: 700;">Profile</span>
                      </div>
                      <div class="arrow"><span style="font-size:1.25rem;margin-right:0.25rem;">></span></div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="logoutModal" data-bs-toggle="modal" data-bs-target="#logoutModal" style="text-decoration:none;color:black;">
                  <div class="container-content" style="margin-bottom: 20px;">
                    <div class="profile d-flex">
                      <div class="d-flex icon-txt" style="margin-right: 1rem;">
                        <i class="p-icon fa-solid fa-arrow-right-from-bracket"></i> <pre> </pre><span class="p-txt" style="font-size:1.2rem;font-weight: 700;">Logout</span>
                      </div>
                      <div class="arrow"><span style="font-size:1.25rem;margin-right:0.25rem;">></span></div>
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