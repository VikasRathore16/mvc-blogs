<?php
  global $settings;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <title>Blogger</title>
</head>

<body>
    <header class='row container-fluid mt-3'>
        <div class='col-3 h3'><a href='../index.php' class='text-decoration-none'>The Blogger</a></div>
        <div class='col-2'></div>
        <div class='col-4'><input type='text'>
            <div class=' ms-2 btn btn-primary'>Search</div>
        </div>
        <div class='col-1'><a class='btn border btn-outline-secondary' href="<?php echo $settings['siteurl']; ?>/pages/login">Log In</a></div>
        <div class='col-1'><a class='btn border btn-outline-secondary' href="<?php echo $settings['siteurl']; ?>/pages/signout">Sign out</a></div>
        <hr class='mt-4'>
    </header>
