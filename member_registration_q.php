<link rel="stylesheet" type="text/css" href="Style.css">
<?php
require ("connector.php");

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];
$level = $_POST["level"];
$pword = $_POST["pword"];

$MemberRegistrationQ = "INSERT INTO `members` (`name`, `email`, `phone`, `gender`, `level`, `pword`) VALUES
                        ('$name', '$email', '$phone', '$gender', '$level', '$pword')";

$MemberRegistrationResult = mysqli_query($db, $MemberRegistrationQ);
if (!$MemberRegistrationResult) {
    echo mysqli_errno($db);
    die('Invalid query: ' . mysql_error());
    ;
}
else{
    header("Location:menu.php");
    exit;
}
 ?>
