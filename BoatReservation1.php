
<link rel="stylesheet" type="text/css" href="Style.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<body>
<div w3-include-html="MemberHomePage.php"></div>

<script>
    w3.includeHTML();
</script>
<?php
require ("connector.php");
require ("Queries.php");

$ResResult = mysqli_query($db, $BoatResQ);
if(!$ResResult){echo "Error";}
echo "<table >
<thead>
    <tr>
        <th>SailorsID</th>
        <th>BoatID</th>
         <th>Date</th>
    </tr>
    </thead>";
while($row = mysqli_fetch_assoc($ResResult)) {
    $Sid = $row['sid'];
    $Bid = $row['bid'];
    $Date = $row['date'];

    echo "

            <tr>
          <td>$Sid</td>
          <td>$Bid</td>
          <td>$Date</td>
          </tr>    ";
}
?>
</table>




<ul>
    <li><a href="BoatReservation3.php"> New Reservation</a></li>
</ul>