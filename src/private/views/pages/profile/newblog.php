<?php
// // print_r($_SESSION['user']);
// foreach ($_SESSION['user'] as $group) {
//     // $arr_items[] = $group->to_array();
//     print_r($group);
// }
// // echo (json_encode($arr_items));

// print_r($_SESSION['user']);
// print_r($data);

?>

<!doctype html>
<html lang="en">

<head>
    <title>New Blog</title>
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
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost:8080/public/pages/profile">
                                <span data-feather="file"></span>
                                My Blogs
                            </a>
                        </li>
                        <li class="nav-item  bg-info">
                            <a class="nav-link" href="http://localhost:8080/public/pages/newblog">
                                <span data-feather="shopping-cart"></span>
                                New Blog
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

                <h2>New Blog</h2>

                <hr>
                <form method="post" action="addPost">
                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="<?php echo $_SESSION['user']?>">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Title of Blog" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Description:</label>
                        <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
                    </div>

                    <label for="comment">Article:</label>
                    <textarea class="form-control" rows="5" id="article" name="article"></textarea>
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                </form>
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
<script src="../../../../public/assets/js/posts.js" rel="text/javascript"></script>

</html>