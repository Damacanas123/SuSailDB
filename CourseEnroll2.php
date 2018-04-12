<?php

require('connector.php');

if (isset($_COOKIE['MemberId'])) {
    $sid = $_COOKIE['MemberId'];
}

$cid = $_POST['courses'];
$paid = $_POST['paid'];

$AddCourse = "INSERT INTO attendsc (sid, cid, paid) 
			VALUES ($sid, $cid, $paid)";

$result = mysqli_query($db, $AddCourse);

if($result) {
    echo "The enrollment is made successfully";
}
else {
    echo mysqli_error($db);
}


?>

    <a href="CourseEnroll1.php">Enrollments</a>

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

isset($_POST['cid']) ? $cid = $_POST['cid'] : $cid = $_GET['cid'];

$courseQ = "INSERT INTO `attendsc`(`sid`, `cid`, `paid`) VALUES ('$sid','$cid','no')";

$result_attender = mysqli_query($db, $courseQ);

if(!$result_attender){
    echo "You somehow could not attend :(
			<br><a href='CourseEnroll1.php'>Back to Courses Page</a>";

}

else
{
    header("Location: CourseEnroll1.php");
}


?>