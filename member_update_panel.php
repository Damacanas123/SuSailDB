
<?php
require ("connector.php");
isset($_POST['ID']) ? $ID = $_POST['ID'] : $ID = $_GET['ID'];
echo $ID;
$RetrieveMember = "SELECT *
          FROM Members as m
          WHERE m.id = '$ID'";
$result = mysqli_query($db, $RetrieveMember);
if(!$result){
    echo "There was an error with retrieval of member info from database";
    exit();
}
$Info = mysqli_fetch_assoc($result);
$name = $Info['name'];
$email = $Info['email'];
$phone = $Info['phone'];
$gender = $Info['gender'];
$level = $Info['level'];
$pword = $Info['pword'];
if($gender == 'erk'){
    $OtherGender = 'kiz';
}
else{
    $OtherGender = 'erk';
}
echo "

<form action=\"/SUsailDB/member_update_handle.php\" method=\"post\">
    <input type=\"hidden\" name=\"Id\" value=$ID>
    Name<br>
    <input type='text' name='Name' value='$name'><br>
    Email<br>
    <input type='text' name='Email' value='$email'><br>
    Phone<br>
    <input type='number' name='Phone' value='$phone' ><br>
    Gender<br>
    <select name='Gender' value='$gender'>
        <option value='$gender'>$gender</option>
        <option value='$OtherGender'>$OtherGender</option>
    </select><br>
    Level<br>
    <input type='number' name='Level' value='$level' ><br>
    Password<br>
    <input type='text' name='Password' value='$pword' ><br>
    <input type='submit' value='Submit'>
</form>";
?>