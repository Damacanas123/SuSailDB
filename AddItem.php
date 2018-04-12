<?php

require ('connector.php');
$iname = $_POST['iname'];
$istatus = $_POST['istatus'];
$inotes = $_POST['inotes'];

$addItemQ = "INSERT INTO `inventory`(`id`, `name`, `status`, `notes`) VALUES (NULL, '$iname', '$istatus', '$inotes');";
$result = mysqli_query($db, $addItemQ);
if(!$result){
    echo "Addition was not successfull
    
	<a href='AddItemPanel.php'>Back to Inventory Page</a>";
}
else
{
header("Location: AddItemPanel.php"); /* Redirect browser */
}
?>