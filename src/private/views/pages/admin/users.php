<?php

// print_r($data);
?>

<?php



?>

<!doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8" />
    <meta content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" name="viewport" />
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="../assests/css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Cedcoss</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="http://localhost:8080/public/pages/signout">Sign out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item ">
                            <a class="nav-link" href="http://localhost:8080/public/pages/checkUser">
                                <span data-feather="file"></span>
                                BLOGS
                            </a>
                        </li>
                        <li class="nav-item bg-info">
                            <a class="nav-link" href="http://localhost:8080/public/pages/users">
                                <span data-feather="shopping-cart"></span>
                                USERS
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>

                <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

                <h2>BLOGS</h2>
                <div class="table-responsive">

                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>

                                    <th scope="col">User Id</th>
                                    <th scope="col">username</th>
                                    <th scope="col">email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Role</th>

                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['user'] as $key => $v) {
                                    echo "<tr>
                                <td>$v->user_id</td>
                                <td>$v->username</td>
                               <td>$v->email</td>
                               <td>$v->status</td>
                               <td>$v->role</td>";
                                    if ($v->status == 'Approved') {
                                        echo " <td><button class='btn bg-danger text-light' id='restrict' data-user_id=$v->user_id>Restrict</button>";
                                    } else {
                                        echo  " <td><button class='btn bg-primary text-light' id='approve' data-user_id=$v->user_id>Approve</button>";
                                    }
                                    echo "<button class='btn ms-3 bg-danger text-light' id='delete' data-user_id=$v->user_id>Delete</button></td>
                            </tr>
                                ";
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <footer class='text-muted mt-5 py-5 bg-dark'>
        <div class='container'>
            <p class='float-end mb-1'>
                <a href='#'>Back to top</a>
            </p>
            <p class='mb-1'>&copy; CEDCOSS Technologies</p>
        </div>
    </footer>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../../../../public/assets/js/users.js" rel="text/javascript"></script>
</html>