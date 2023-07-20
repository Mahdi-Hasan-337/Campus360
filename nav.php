<?php 
  session_start(); 
  // $isLoggedIn = isset($_SESSION['l_username']);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 px-1">
  <div class="container-fluid">
    <img class="logo" src="images/campusdotcrew.png" alt="">
    <a class="navbar-brand logo-name" href="index.html">Campus Dot Crew</a>
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
        <?php if (isset($_SESSION['l_username'])) { ?>
          <!-- Code for the logged-in user -->
          <a class="li-item nav-link dropdown dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="images/campusdotcrew.png" class="rounded-circle" alt="Avatar" loading="lazy" style="height: 2.5rem; width: 2.5rem;">
          </a>
          <ul class="dropdown-menu dropdown-menu-end centered-dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="align-items: center; padding: 1rem;">
            <li>
              <img src="images/campusdotcrew.png" class="text-center p-pic rounded-circle" alt="Avatar" loading="lazy" style="height: 3rem; width: 3rem; display: block; margin: 0 auto; text-align: center;">
              <h4 class="my-3" style="font-weight: bold;">Campus Dot Crew</h4>
            </li>
            <hr>
            <li>
              <div class="d-flex bd-highlight mb-3">
                <div class="p-2 bd-highlight"><i class="p-icon fa-solid fa-pen-to-square"></i></div>
                <div class="p-2 bd-highlight p-txt">Update profile</div>
                <div class="ms-auto p-2 bd-highlight"><span class="p-span">></span></div>
              </div>
            </li>
            <hr>
            <li>
              <div class="d-flex bd-highlight mb-3">
                <div class="p-2 bd-highlight"><i class="p-icon fa-solid fa-gear"></i></div>
                <div class="p-2 bd-highlight p-txt">Settings</div>
                <div class="ms-auto p-2 bd-highlight"><span class="p-span">></span></div>
              </div>
            </li>
            <hr>
            <li>
              <div class="d-flex bd-highlight mb-3">
                <div class="p-2 bd-highlight"><i class="p-icon fa-solid fa-arrow-right-from-bracket"></i></div>
                <div class="p-2 bd-highlight p-txt">
                  <a href='logout.php' class='' style='text-decoration: none;color: black;'>Logout</a>
                </div>
                <div class="ms-auto p-2 bd-highlight"><span class="p-span">></span></div>
              </div>
            </li>
          </ul>
        <?php } else { ?>
          <!-- Code for the not logged-in user -->
          <a class='login-btn nav-link text-center btn-primary' href='login.php' tabindex='-1' aria-disabled='true'>Login</a>
        <?php } ?>
      </div>
    </div>
  </div>
</nav>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab:wght@700&family=Roboto:ital,wght@1,500&display=swap');
        
  .d-item{
    text-align: center;
  }
  .logo{
    width:4rem; 
    height: 4rem; 
    border-radius: 50%; 
    margin-right: 1rem;
  }
  .logo-name{
    font-family: 'Roboto Slab', serif;
    text-transform: uppercase;
    letter-spacing: .2rem;
  }
  .login-btn{font-family: 'Roboto Slab', serif;
    color: white;
    background: rgb(174, 174, 245);
    padding: 0.5rem 1.5rem;
    border-radius: 0.5rem;
    margin: 0rem 0.5rem;
    width: 6.5rem;
    font-size: 1.1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 500;
    text-transform: uppercase;
  }
  .login-btn:hover{
    background: white;
  }
  .li-item{
    color: white !important;
    text-transform: uppercase;
    letter-spacing: .1rem;
  }
  .li-item:hover{
    color: black !important;
    text-transform: uppercase;
  }
  .n-item{
    font-family: 'Poppins', sans-serif;
    font-size: 1.1rem;
    /* margin: 0rem 0.5rem; */
    padding: 0 1rem;
    text-transform: uppercase;
  }
  .n-item:hover{
    background: rgb(239, 232, 232);
    border-radius: 0.5rem;
    padding: 0 1rem;
    color: black;
    /* padding: 0 1rem; */
  }
  .s-icon{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    margin: 0rem 0.5rem;
  }
  .search-icon .btn{
    color: white;
  }
  .div-search-icon{
    display: flex;
    align-items: center;
    justify-content: center;
  }
  #search-menu {
    padding: 5px;
    width: 19rem;
  }
  #search-menu input {
    width: 200px;
  }
  .element3 .dropdown-toggle::after {
    content: none;
  }
  .s-li-icon .dropdown-toggle::after {
    content: none;
  }
  .p-txt{
    font-size: 1.1rem;
    font-weight: bold;
  }
  .p-icon{
    font-size: 1.2rem;
  }
  .p-span{
    font-size: 1.2rem;
    font-weight: bold;
  }
  .centered-dropdown-menu li {
    line-height: 1;
  }

  /* .reverse{
    display:flex;
    align-items:center;
  } */

  /* Responsive Design */
  @media (max-width: 992px){
    /* .element2{
      margin:auto !important;
    }
    .reverse{
        display: flex;
        flex-direction: column-reverse;
    } */
    .n-item:hover{
    background: none;
    color: whitesmoke; 
    }

    .li-item:hover{
    color: whitesmoke !important;
    }
    .reverse{
      margin: 1rem 0rem;
    }
    .dropdown-menu{
      width: 50%;
      align-items: center;
      background: rgb(225, 225, 225);
    }
    .d-item{
      text-align: center;
    }
    .element3{
      justify-content: center;
      flex-direction: column;
    }
    .login-btn{
      margin-top: 1rem;
    }
    .d-menu{
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    .d-item{
      text-align: center;
    }
    .centered-dropdown-menu {
        left: 50%;
        transform: translateX(-50%);
    }
  }
</style>
