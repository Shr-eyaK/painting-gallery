<?php
$SQL = "SELECT * FROM Paintings ORDER BY ID ASC";
$result = $mysqli->query($SQL);
?>

<p class="count">
    Showing <?= $result->num_rows ?> 
    <?= $result->num_rows == 1 ? 'painting' : 'paintings' ?>
</p>

<table>
    <tr>
        <th>Title</th>
        <th>Artist</th>
        <th>Year</th>
        <th>Price (M USD)</th>
        <th>Action</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['Title'] ?></td>
            <td><?= $row['Artist'] ?></td>
            <td><?= $row['Year'] ?></td>
            <td><?= $row['Price'] ?></td>
            <td>
                <a href="deletePainting.php?ID=<?= $row['ID'] ?>" class="delete-btn">Delete</a>
            </td>
        </tr>
    <?php } ?>

</table>

<br><br>

<form action="addPainting.php" method="GET">
    <button type="submit" class="add-btn">+ Add New Painting</button>
</form>

<?php
$result->free_result();
?>