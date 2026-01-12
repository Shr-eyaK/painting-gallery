<!--Exericse1-->
<!DOCTYPE html>
<html>
<head>
    <title>
        Paintings
    </title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <h1> Add a New Painting </h1>

    <?php
        require_once('config.inc.php');
        $mysqli = new mysqli(HOST, USER, PASSWORD, DB, PORT);

        if ($mysqli->connect_error){
            die('Connection Error');
        }

        if (isset($_POST["Title"])) {

            $title  = $_POST["Title"];
            $artist = $_POST["Artist"];
            $year   = $_POST["Year"];
            $price  = $_POST["Price"];

            $SQL = "insert into Paintings (Title, Artist, Year, Price)
                    values ('$title', '$artist', $year, $price)";

            if ($mysqli->query($SQL)) {
                echo "<p class='success'>Record inserted successfully</p>";
            }
            else {
                echo "<p class='failed'>Failed insert record</p>";
            }

            require_once('showPaintings.php');
            $mysqli->close();
            exit;
        }
    ?>

    <form method="POST" action="addPainting.php">
        <label>Title:</label><br>
        <input type="text" name="Title" required><br><br>

        <label>Artist:</label><br>
        <input type="text" name="Artist" required><br><br>

        <label>Year:</label><br>
        <input type="number" name="Year" required><br><br>

        <label>Price:</label><br>
        <input type="number" step="0.01" name="Price"><br><br>

        <input type="submit" value="Add Painting">
    </form>

</body>
</html>