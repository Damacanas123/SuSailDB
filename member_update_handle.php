<?php
require ("connector.php");
$id = $_POST['Id'];
$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$gender = $_POST['Gender'];
$level = $_POST['Level'];
$pword = $_POST['Password'];
$InsertQuery = "UPDATE members
                SET name='$name', email='$email',phone='$phone',gender='$gender',level='$level',pword='$pword'
                WHERE id='$id' ";


$result = mysqli_query($db, $InsertQuery);

if($result){
    header("Location:menu.php");
    exit;
}
else{
    echo "Update was not succesful<br>";
    echo"<a href='menu.php'>Admin Home Page</a>";
}
?>


