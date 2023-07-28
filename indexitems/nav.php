<?php //session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 px-1">
  <div class="container-fluid">
    <img class="logo" src="images/campusdotcrew.png" alt="">
    <a class="navbar-brand logo-name" href="index.php">Campus Dot Crew</a>
    <button class="navbar-toggler white-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="reverse collapse navbar-collapse" id="navbarNav">
      <div class="element2 ms-auto">
        <ul class="navbar-nav justify-content-center">
          <li class="n-item nav-item text-center">
            <a class="li-item nav-link active home" aria-current="page" href="#">Home</a>
          </li>
          <li class="n-item nav-item dropdown d-menu">
            <a class="li-item nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Courses</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="d-item dropdown-item" href="#">Action</a></li>
              <hr>
              <li><a class="d-item dropdown-item" href="#">Another action</a></li>
              <hr>
              <li><a class="d-item dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="n-item nav-item text-center">
            <a class="li-item nav-link" href="#">Job Preparation</a>
          </li>
          <li class="n-item nav-item text-center">
            <a class="li-item nav-link" href="#" tabindex="-1" aria-disabled="true">Routine</a>
          </li>
          <li class="n-item nav-item text-center">
            <a class="li-item nav-link" href="#" tabindex="-1" aria-disabled="true">Vlog</a>
          </li>
          <!-- Search bar -->
          <li class="li-item s-li-icon n-item nav-item dropdown d-menu">
            <a href="#" style="text-decoration:none;" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="s-icon li-item fa-solid fa-magnifying-glass" style="color:white"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" id="search-menu">
              <li>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="element3 d-flex" style="align-items: center;">
        <?php include'navitems/element3.php'; ?>
      </div>
    </div>
  </div>
</nav>

<?php include'navitems/loginmodal.php'; ?>

<?php include'navitems/registermodal.php'; ?>

<?php include'navitems/logoutmodal.php'; ?>

<?php include'navitems/profilemodal.php'; ?>

<?php include'navitems/updateprofilemodal.php'; ?>

<!-- Javascript -->
<script>
  function togglePasswordVisibility(inputId) {
    const passwordInput = document.getElementById(inputId);
    const passwordToggleIcon = document.querySelector(`[onclick="togglePasswordVisibility('${inputId}')"]`);
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passwordToggleIcon.classList.remove('fa-eye-slash');
        passwordToggleIcon.classList.add('fa-eye');
    } else {
        passwordInput.type = 'password';
        passwordToggleIcon.classList.remove('fa-eye');
        passwordToggleIcon.classList.add('fa-eye-slash');
    }
  }
</script>