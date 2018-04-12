<?php
require ("connector.php");

$level = $_POST["level"];
$term = $_POST["term"];
$year = $_POST["year"];
$price = $_POST["price"];


$CourseCreationQ = "INSERT INTO `courses` ( `level`, `term`, `year`, `price`) VALUES
                        ( '$level', '$term', '$year', '$price')";

$CourseCreationResult = mysqli_query($db, $CourseCreationQ);
if (!$CourseCreationResult) {
    die('Invalid query: ' . mysql_error());
    ;
}
else {
    header("Location: course_creation_panel.php"); /* Redirect browser */
    exit();
}
 ?>
