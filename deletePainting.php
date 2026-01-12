<!--Activity3-->
<!DOCTYPE html>
<html>
<head>
    <title>
        Paintings
    </title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <h1> List of Paintings </h1>
    <?php
        require_once('config.inc.php');
        $mysqli = new mysqli(HOST, USER, PASSWORD, DB, PORT);

        if ($mysqli->connect_error){
            die('Connection Error');
        }

        if (isset($_GET["ID"])) {
            $SQL = "delete from Paintings where ID= " . $_GET["ID"];
            if ($mysqli->query($SQL)) {
                echo "<p class='success'>Record deleted successfully </p>";
            }
            else {
                echo "<p class='failed'> Failed to delete the record </p>";
            }
        }

        require_once('showPaintings.php');
        $mysqli->close();
    ?>
</body>
</html>

