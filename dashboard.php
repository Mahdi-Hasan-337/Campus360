<?php //include 'includes/indexitems/header_code.php';?>
<?php include 'includes/indexitems/header_code.php';?>
<?php include 'includes/indexitems/nav.php'; ?>
    <style>
        .logo-name{
        font-family: 'Roboto Slab', serif;
        text-transform: uppercase;
        letter-spacing: .1rem;
        color: black;
        }
        .logo{
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
        }
        #wrapper {
            overflow-x: hidden;
        }
        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            transition: all 0.25s ease-out;
        }
        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }
        #sidebar-wrapper .list-group {
            width: 15rem;
        }
        #page-content-wrapper {
            min-width: 100vw;
        }
        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }
        #menu-toggle {
            cursor: pointer;
        }
        .list-group-item {
            border: none;
            padding: 20px 30px;
        }
        .list-group-item.active {
            background-color: transparent;
            font-weight: bold;
            border: none;
        }
        
        /* Responsive Design */
        @media (min-width: 768px) {
            #sidebar-wrapper {
            margin-left: 0;
            }
            #page-content-wrapper {
            min-width: 0;
            width: 100%;
            }
            #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
            }
        }
    </style>

    <?php if (isset($_SESSION['l_email']) && $_SESSION['l_email'] === "campusdotcrew@gmail.com") { ?>
        <div class="d-flex" id="wrapper">
            <div class="bg-white d-flex flex-column" id="sidebar-wrapper">
                <!-- <div class="sidebar-heading text-center py-4 fs-4 fw-bold text-uppercase border-bottom">
                    <img class="logo" src="images/campusdotcrew.png" alt=""><br>Campus 360
                </div> -->
                <div class="contents" style="display: flex; flex-direction: column; justify-content: space-between; flex-grow: 1;">
                    <div class="list-group list-group-flush my-3">
                        <a href="#" class="list-group-item list-group-item-action" style="text-transform:uppercase;font-size:1.2rem; font-family:'Poppins',sans-serif; font-weight:bold;">
                            <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                        </a>

                        <a href="#" class="list-group-item list-group-item-action" style="text-transform:uppercase;font-size:1.2rem; font-family:'Poppins',sans-serif; font-weight:bold;">
                            <i class="fas fa-chart-line me-2"></i>Analytics
                        </a>

                        <a href="#" class="list-group-item list-group-item-action dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#NotificationMenu" aria-expanded="false" aria-controls="NotificationMenu" style="text-transform:uppercase;font-size:1.2rem; font-family:'Poppins',sans-serif; font-weight:bold;">
                            <i class="fa-solid fa-bell me-2"></i>Notification
                        </a>
                        <div class="collapse" id="NotificationMenu" style="padding-left: 1.4rem;">
                            <a href="#" class="list-group-item list-group-item-action" style="text-transform:uppercase;font-size:1rem; font-family:'Poppins',sans-serif;">
                                <i class="fas fa-comment-alt me-2"></i>Vlog Reguest
                            </a>
                            <a href="#" class="list-group-item list-group-item-action" style="text-transform:uppercase;font-size:1rem; font-family:'Poppins',sans-serif;">
                                <i class="fas fa-comment-alt me-2"></i>Enable Request
                            </a>
                        </div>

                        <a href="#" class="list-group-item list-group-item-action" style="text-transform:uppercase;font-size:1.2rem; font-family:'Poppins',sans-serif; font-weight:bold;">
                            <i class="fas fa-comments me-2"></i>Feedback
                        </a>
                    </div>
                    <!-- <div class="logout">
                        <a href="#logoutModal" class="list-group-item list-group-item-action text-danger fw-bold nav-link" data-bs-toggle="modal" role="button" style="text-transform:uppercase;font-size:1.2rem; font-family:'Poppins',sans-serif; font-weight:bold;">
                            <i class="fas fa-power-off me-2"></i>Logout
                        </a>
                    </div> -->
                </div>
            </div>

            <!-- Contents for dashboard -->
            <?php include 'includes/dash_items/dashboard_page.php'; ?>
        </div>
    <?php } else { ?>
    <?php } ?>

<?php include 'includes/indexitems/nav.php'; ?>
<?php include 'includes/navitems/logoutmodal.php'; ?> 