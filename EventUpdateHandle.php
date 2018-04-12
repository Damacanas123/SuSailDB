<?php
require ("connector.php");
$eid = $_POST['Id'];
$ename = $_POST['Name'];
$edate = $_POST['Date'];
$etype = $_POST['Type'];
$eprice = $_POST['Price'];

$updateEventQ = "UPDATE `events` SET `id`= '$eid',`date`= '$edate',`name`= '$ename' ,`type`= '$etype',`price`= '$eprice' WHERE id = '$eid'";
$result = mysqli_query($db, $updateEventQ);
if(!$result){
    echo "Update was not successfull
			<br><a href='AddEventPanel.php'>Back to Events Page</a>";
    
	
	
}

else
{
	header("Location: AddEventPanel.php");
}

?>