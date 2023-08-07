<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
    <img class="logo" src="images/campusdotcrew.png" alt="">
    <a class="navbar-brand logo-name" href="index.php">Campus 360</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="reverse ms-auto">
        <div class="element2 ms-auto">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="n-item nav-item text-center">
              <a class="li-item nav-link active home" aria-current="page" href="#">Home</a>
            </li>
            
            <li class="n-item nav-item dropdown">
              <a class="li-item nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Courses
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>

            <li class="n-item nav-item">
              <a class="li-item nav-link" aria-current="page" href="#">Job Preparation</a>
            </li>

            <li class="n-item nav-item">
              <a class="li-item nav-link" aria-current="page" href="#">Vlog</a>
            </li>

            <?php if (isset($_SESSION['l_email'])) { ?>
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
        <?php include('navitems/element3.php');?>
      </div>
    </div>
  </div>
</nav>

<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <img class="logo" src="images/campusdotcrew.png" alt="">
    <a class="navbar-brand logo-name" href="index.php">Campus 360</a>
    <p></p>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="element2 ms-auto">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="n-item nav-item text-center">
            <a class="li-item nav-link active home" aria-current="page" href="#">Home</a>
          </li>
          <li class="n-item nav-item dropdown d-menu">
            <a class="li-item nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Courses</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <hr>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <hr>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="n-item nav-item text-center">
            <a class="li-item nav-link" href="content.php">Job Preparation</a>
          </li>
          <li class="n-item nav-item text-center">
            <a class="li-item nav-link" href="#" tabindex="-1" aria-disabled="true">Routine</a>
          </li>
          <li class="n-item nav-item text-center">
            <a class="li-item nav-link" href="#" tabindex="-1" aria-disabled="true">Vlog</a>
          </li>
          <li class="n-item nav-item text-center">
            <a class="li-item nav-link" href="dashboard.php" tabindex="-1" aria-disabled="true">Dashboard</a>
          </li>
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
      <div class="element3 d-flex" style="align-items: center;">
        <?php //include('navitems/element3.php');?>
      </div>
    </div>
  </div>
</nav> -->