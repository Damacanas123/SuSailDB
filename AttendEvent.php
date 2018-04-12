<link rel="stylesheet" type="text/css" href="Style.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<body>
<div w3-include-html="MemberHomePage.php"></div>

<script>
    w3.includeHTML();
</script>
<?php

require ('connector.php');
$ListEventQ = "SELECT * FROM `events` ORDER BY `id`";

if (isset($_COOKIE['MemberId'])) {
    $sid = $_COOKIE['MemberId'];
}

$ListEventResult = mysqli_query($db, $ListEventQ);

?>

<table>
    <thead>
    <tr>
        <th>Event ID</th>
        <th>Date</th>
        <th>Event Name</th>
        <th>Price</th>
    </tr>
    </thead>
    <tbody>



    <?php
    while($row = mysqli_fetch_assoc($ListEventResult)) {
        $eid = $row['id'];
        $edate = $row['date'];
        $ename = $row['name'];
        $etype= $row['type'];
        $eprice = $row['price'];


        $MemberAttends = 0;
        $MemberAttendsQ = "SELECT * FROM attendse WHERE attendse.eid = $eid AND attendse.sid = $sid";
        $res_temp = mysqli_query($db, $MemberAttendsQ);
        if( mysqli_fetch_assoc($res_temp))
        {
            $MemberAttends = 1;
        }
        if($MemberAttends)
        { echo "<tr>
          <td>$eid</td>
          <td>$ename</td>
          <td>$etype</td>
          <td>$edate</td>
		  <td>attending</td>
          </tr>";
        }
        else
        {
            echo	"<tr>
          <td>$eid</td>
          <td>$ename</td>
          <td>$etype</td>
          <td>$edate</td>
		  <td><a href='Attender.php?sid=$sid&eventid=$eid'>attend!</a></td>
          </tr>";

        }

    }
    ?>
    </tbody>