<!DOCTYPE html>
<html>
<head>
    <title>
        Paintings
    </title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

    <h1> Painting Gallery </h1>
    <?php
        require_once('config.inc.php');
        $mysqli = new mysqli(HOST, USER, PASSWORD, DB, PORT);

        if ($mysqli->connect_error) {
            die('Connection Error');
        } else {

        require_once('showPaintings.php');
        }
    ?>

</body>
</html>

