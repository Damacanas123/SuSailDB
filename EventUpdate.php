<link rel="stylesheet" type="text/css" href="Style.css">
<?php
require ("connector.php");
isset($_POST['ID']) ? $ID = $_POST['ID'] : $ID = $_GET['ID'];

$RetrieveEvent = "SELECT *
          FROM events as e
          WHERE e.id = '$ID'";
$result = mysqli_query($db, $RetrieveEvent);
if(!$result){
    echo "There was an error with retrieval of member info from database";
    exit();
}
$Info = mysqli_fetch_assoc($result);
$ename = $Info['name'];
$edate = $Info['date'];
$etype = $Info['type'];
$eprice = $Info['price'];


echo "

<form action=\"/susaildb/EventUpdateHandle.php\" method=\"post\">
    <input type=\"hidden\" name=\"Id\" value=$ID>
    Name<br>
    <input type='text' name='Name' value='$ename'><br>
	Date<br>
    <input type='date' name='Date' value='$edate'><br>
    Type<br>
    <input type='text' name='Type' value='$etype' ><br>
    
    Price<br>
    <input type='number' name='Price' value='$eprice' ><br>
   
    <input type='submit' value='Submit'>
</form>";
?>