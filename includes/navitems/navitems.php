<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
    <img class="logo" src="assets/images/campusdotcrew.png" alt="">
    <a class="navbar-brand logo-name" href="index.php">Campus 360</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="reverse ms-auto">
        <div class="element2">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="n-item nav-item text-center">
              <a class="li-item nav-link active home" aria-current="page" href="index.php">Home</a>
            </li>

            <li class="n-item nav-item text-center">
              <a class="li-item nav-link active home" aria-current="page" href="navitems/Course Website/CoursePage.php">Courses</a>
            </li>

            <li class="n-item nav-item">
              <a class="li-item nav-link" aria-current="page" href="CoursePage.php">Job Preparation</a>
            </li>

            <li class="n-item nav-item">
              <a class="li-item nav-link" aria-current="page" href="#">Vlog</a>
            </li>

            <?php if (isset($_SESSION['l_email']) && $_SESSION['l_email'] === "campusdotcrew@gmail.com") { ?>
              <li class="n-item nav-item">
                <a class="li-item nav-link" aria-current="page" href="dashboard.php">Dashboard</a>
              </li>
            <?php } ?>

            <li class="s-li-icon nav-item dropdown d-menu">
              <a href="#" style="text-decoration:none;" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="s-icon fa-solid fa-magnifying-glass p-1" style="color:white;"></i>
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
      </div>
      <div class="element3 d-flex" style="align-items: center;">
        <?php include('./includes/navitems/element3.php');?>
      </div>
    </div>
  </div>
</nav>