<?php
error_reporting(0);

print_r($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <meta name="theme-color" content="#7952b3">
    <title>Document</title>
</head>

<body class='container'>
    <form class='form' action='updatePost' method='post'>
    <input type='hidden' name='blog_id' value='<?php echo $data['article']->blog_id;   ?>'>
    <label class='control-label'>Title</label>
    <br>
    <textarea type="textfield" rows="2" name="title" cols="100">
    <?php echo $data['article']->title; ?>
    </textarea>
    <br>
    <label>Description</label>
    <br>
    <textarea type="textfield" name="description" rows="4" cols="100">
    <?php echo $data['article']->description; ?>
    </textarea>
    <br>
    <label for="article" >Article</label>
    <br>
    <textarea type="textfield" name='article' rows="20" cols="100">
    <?php echo $data['article']->article; ?>
    </textarea>
    <br>
    <input type="submit" name="submit" value='submit' class="btn btn-sm btn-outline-secondary mt-4 bg-primary text-light"></input>
    </form>
</body>

</html>