<?php

// print_r($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <title>Sign In</title>
</head>

<body>

    <div class="container mt-3">


        <div class="row">
            <div class="col-3"></div>
            <form action="addUser" class='col-6' method="POST">
                <h2>Sign In</h2>
                <br>
                <hr>
                <div class="mb-3 mt-3">
                    <label for="Name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="name" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                <div class="mb-3 mt-2">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                </div>
                <div class="mb-3 mt-2">
                    <label for="conf-pwd">Confirm Password:</label>
                    <input type="password" class="form-control" id="confirm" placeholder="Confirm password" name="confirm" required>
                </div>
                <div class=" mb-3 small text-danger">
                    <label>
                        <?php if (isset($data)) {
                            echo $data['msg'];
                        } else ?>

                        <div class=" mb-3 ">
                            <label>
                            Account Exists ?   <a href="<?php echo $settings['siteurl']; ?>/pages/login"> Log In</a>
                            </label>
                        </div><?php

                                ?>
                    </label>
                </div>
                <button class="w-75 mb-5 btn btn-lg btn-primary" type="submit" name="submit" value="submit">Sign Up</button>
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