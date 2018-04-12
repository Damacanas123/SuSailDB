<?php
require ("connector.php");

$name = $_POST["name"];
$capacity = $_POST["capacity"];
$year = $_POST["notes"];

$AddNewBoatQ = "INSERT INTO `boats` ( `name`, `capacity`, `notes`) VALUES
                        ( '$name', '$capacity', '$year')";

$AddNewBoatResult = mysqli_query($db, $AddNewBoatQ);
if (!$AddNewBoatResult) {
    die('Invalid query: ' . mysql_error());
    ;
}
else{
    header("Location:menu.php");
    exit;
}
 ?>
