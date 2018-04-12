<?php

require ('connector.php');

$sqlBoats = "SELECT * FROM boats ORDER BY id";
$boatsResult = mysqli_query($db, $sqlBoats);
?>

<form action="BoatReservation2.php" method="post">

    <label>Boats</label>
    <select name="boats">
        <?php
        while($row = mysqli_fetch_assoc($boatsResult)) {
            $id = $row['id'];
            $name = $row['name'];

            echo "<option value=$id>$id - $name</option> \n";
        }
        ?>
    </select><br>

    <label>Reservation Date</label>
    <input type="date" name="date"><br>
    <input type="submit">
</form>


