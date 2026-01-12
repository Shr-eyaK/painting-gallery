<!--Activity2-->
<?php
    // Exercise1
    $SQL = "select * from Paintings ORDER BY ID ASC";
    if ($result = $mysqli->query($SQL)) {

        echo "<p> There are " . $result->num_rows . " Paintings </p>";
        echo "<table border=1>";
        echo "<tr> <th> Title </th> <th> Artist </th>";
        echo "<th> Year </th> <th> Price (M USD) </th>";
        // Activity3
        echo "<th></th></tr>\n";

        while ($obj = $result->fetch_object()) {
            echo "<tr> <td> $obj->Title </td>";
            echo "<td> $obj->Artist </td>";
            echo "<td> $obj->Year </td>";
            echo "<td> $obj->Price </td>";
            // Activity3
            echo "<td> <a href='deletePainting.php?ID=$obj->ID'>delete</a> </td>";
            echo "</tr> \n";
        }
        echo "</table>\n\n"; 
        $result->free_result();
        // Exercise1
        echo "<br><br>";       
        echo "<form action='addPainting.php' method='GET'><button type='submit'>Add New Painting</button></form>";
    }
?>
