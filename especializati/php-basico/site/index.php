<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Meu site em PHP</title>
    </head>
<body>
    <?php
//        include_once('./includes/header.php');
//        require('includes/header.php');
        require_once('includes/header.php');
    ?>

    <?php
        include('includes/body.php');
    ?>

    <?php
        include_once('includes/footer.php');
    ?>
</body>
</html>