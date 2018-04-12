<?php

require ('connector.php');

$sqlItems = "SELECT * FROM inventory ORDER BY id";
$itemsResult = mysqli_query($db, $sqlItems);
?>

<form action="ItemBorrow2.php" method="post">

    <label>Items</label>
    <select name="inventory">
        <?php
        while($row = mysqli_fetch_assoc($itemsResult)) {
            $id = $row['id'];
            $name = $row['name'];
			$status = $row['status'];
			$notes = $row['notes'];

            echo "<option value=$id>$id - $name</option> \n";
        }
        ?>
    </select><br>

    <label>Start Date</label>
    <input type="date" name="start_date"><br>
	<label>End Date</label>
    <input type="date" name="end_date"><br>
    <input type="submit">
</form>


