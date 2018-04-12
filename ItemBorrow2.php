<?php

require('connector.php');

if (isset($_COOKIE['MemberId'])) {
    $sid = $_COOKIE['MemberId'];
}
$iid = $_POST['inventory'];
$start_date = date('Y-m-d', strtotime($_POST['start_date']));
$end_date = date('Y-m-d', strtotime($_POST['end_date']));

$AddItem = "INSERT INTO borrows (sid, iid, start_date,end_date) 
			VALUES ($sid, $iid, '$start_date', '$end_date')";

$result = mysqli_query($db, $AddItem);

if($result) {
    echo "The reservation is made successfully";
}
else {
    echo mysqli_error($db);
}


?>

<a href="ItemBorrow1.php">Items</a>