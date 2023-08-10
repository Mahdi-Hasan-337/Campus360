<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-bars fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0">Dashboard</h2>
        </div>
    </nav>

    <div class="container-fluid px-4">
        <div class="row g-3 my-2">

            <div class="col-md-4">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">25%</h3>
                        <p class="fs-5">Visitors</p>
                    </div>
                    <i class="fa-solid fa-users-line fs-1 border p-3"></i>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">400</h3>
                        <p class="fs-5">New Uploads</p>
                    </div>
                    <i class="fa-solid fa-upload fs-1 border p-3"></i>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">150</h3>
                        <p class="fs-5">Downlaods</p>
                    </div>
                    <i class="fa-solid fa-download fs-1 p-3"></i>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <h3 class="fs-4 mb-3">Recent Orders</h3>
            <div class="col">
                <table class="table bg-white rounded shadow-sm  table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'config.php';

                            $allData = mysqli_query($conn, "SELECT * FROM `register`");

                            while ($row = mysqli_fetch_array($allData)) {

                                // To skip displaying admin
                                if ($row['db_email'] === 'campusdotcrew@gmail.com') {
                                    continue;
                                }
                                echo "
                                    <tr>                               
                                        <td>$row[id]</td>
                                        <td>$row[db_username]</td>
                                        <td>$row[db_email]</td>
                                        <td>$row[db_phone]</td>
                                        <td>
                                    ";
                                if ($row['active_status'] == 1) {
                                    echo "<a class='col-6 btn btn-warning' href='includes/action/update_status_Action.php?id={$row['id']}'>Disable</a>";
                                } else if ($row['active_status'] == 0) {
                                    echo "<a class='col-6 btn btn-danger' href='includes/action/update_status_Action.php?id={$row['id']}'>Enable</a>";
                                }
                                echo "
                                        </td>
                                    </tr>
                                ";
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>