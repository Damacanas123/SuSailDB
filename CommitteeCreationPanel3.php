<?php
require ("connector.php");
$name = $_POST['CommitteeName'];
$budget = $_POST['Budget'];
$query = "INSERT INTO `committees`(`name`, `budget`) VALUES ('$name','$budget')";
$result = mysqli_query($db, $query);

if($result) {
    echo "Committee is created successfully.<br>";
}
else {
    echo mysqli_error($db);
}
?>

<a href="CommitteeCreationPanel1.php">Committees</a>
<br>
<a href="AdminHomePage.php">AdminHomePage</a>
