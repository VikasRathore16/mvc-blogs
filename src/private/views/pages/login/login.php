<?php

error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <title>Log In</title>
</head>

<body>

    <div class="container mt-3">


        <div class="row">
            <div class="col-3"></div>
            <form action="checkUser" method="POST" class='col-6'>
                <h2>Log In</h2>
                <br>
                <hr>

                <div class="mb-3 mt-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3 mt-2">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                </div>
                <div class="mb-3 mt-2 text">
                    Don't have Acoount ? <a href="<?php echo $settings['siteurl']; ?>/pages/signup">SignUp</a>
                </div>
                <div class=" mb-3 small text-danger">
                    <label>
                        <?php
                        if (isset($data)) {
                            print_r($data['check']);
                        }
                        ?>
                    </label>
                </div>
                <button class="w-75 mb-5 btn btn-lg btn-primary" type="submit" name="submit" value="submit">Log in</button>
            </form>
            <div class="col-3"></div>
        </div>
    </div>


</body>
<footer class='text-muted py-5 bg-dark'>
    <div class='container'>
        <p class='float-end mb-1'>
            <a href='#'>Back to top</a>
        </p>
        <p class='mb-1'>&copy; CEDCOSS Technologies</p>
    </div>
</footer>

</html>