<head>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<?php
require ("connector.php");
require ("Queries.php");

if($_POST['Password'] == $AdminPassword) {
    header("Location:menu.php");
    exit;

}

$Members = mysqli_query($db, $ListMemberQ);
while($row = mysqli_fetch_assoc($Members)){
    if($_POST['Email'] == $row['email'] && $_POST['Password'] == $row['pword']) {
        $MemberId = $row['id'];
        setcookie("MemberId", $MemberId, time()+1000);
        header("Location:MemberHomePage");
        exit;
    }
}

echo "Incorrect email password match";

?>