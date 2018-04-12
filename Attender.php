<link rel="stylesheet" type="text/css" href="Style.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<body>
<div w3-include-html="MemberHomePage.php"></div>

<script>
    w3.includeHTML();
</script>

<?php
require ("connector.php");
isset($_POST['sid']) ? $ID = $_POST['sid'] : $ID = $_GET['sid'];
echo $ID;
echo $ID;
isset($_POST['eventid']) ? $eid = $_POST['eventid'] : $eid = $_GET['eventid'];

$attenderQ = "INSERT INTO `attendse`(`sid`, `eid`, `paid`) VALUES ('$ID','$eid','no')";

$result_attender = mysqli_query($db, $attenderQ);

if(!$result_attender){
    echo "You somehow could not attend :(
			<br><a href='AttendEvent.php'>Back to Events Page</a>";

}

else
{
    header("Location: AttendEvent.php");
}


?>