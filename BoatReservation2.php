<link rel="stylesheet" type="text/css" href="Style.css">
<?php

require('connector.php');
if (isset($_COOKIE['MemberId'])) {
    $MemberId = $_COOKIE['MemberId'];
}

else {
    echo "In valid member ID.<br>";
    exit;
}

$bid = $_POST['boats'];
$date = date('Y-m-d', strtotime($_POST['date']));

$AddRes = "INSERT INTO reserves (sid, bid, date) 
			VALUES ($MemberId, $bid, '$date')";

$result = mysqli_query($db, $AddRes);

if($result) {
    echo "The reservation is made successfully";
}
else {
    echo mysqli_error($db);
}


?>

<a href="BoatReservation1.php">Reservations</a>
