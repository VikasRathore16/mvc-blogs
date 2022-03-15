<?php
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label>Description</label>
    <br>
    <textarea type="textfield" rows="4" cols="100">
    <?php echo $data['article']->description; ?>
    </textarea>
    <br>
    <label for="article">Article</label>
    <br>
    <textarea type="textfield" rows="20" cols="100">
    <?php echo $data['article']->article; ?>
    </textarea>

    </textarea>
</body>
</html>