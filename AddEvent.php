<head>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<?php

require ('connector.php');
//require('Queries.php');
$edate = date('Y-m-d', strtotime($_POST['edate']));
$ename = $_POST['ename'];
$etype = $_POST['etype'];
$eprice = (int)$_POST['eprice'];
$addEventQ = "INSERT INTO `events`(`id`, `date`, `name`, `type`, `price`) VALUES (NULL, '$edate', '$ename', '$etype', '$eprice');";
$result = mysqli_query($db, $addEventQ);
if($result){
    header("Location: AddEventPanel.php"); /* Redirect browser */
    exit();
}
else{
    echo "Event was not added<br>";
    echo"<a href='menu.php'>Admin Home Page</a>";
}

?>