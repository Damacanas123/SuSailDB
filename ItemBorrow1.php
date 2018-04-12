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

$ResResult = mysqli_query($db, $ItemBorrow);
if(!$ResResult){echo "Error";}
echo "<table class = \"navigation-bar3\">
<thead>
    <tr>
        <th>SailorsID</th>
        <th>ItemID</th>
        <th>StartDate</th>
		<th>EndDate</th>
    </tr>
    </thead>";
while($row = mysqli_fetch_assoc($ResResult)) {
    $Sid = $row['sid'];
    $Iid = $row['iid'];
    $StartDate = $row['start_date'];
	$EndDate = $row['end_date'];

    echo "

            <tr>
          <td>$Sid</td>
          <td>$Iid</td>
          <td>$StartDate</td>
		  <td>$EndDate</td>
          </tr>    ";
}
?>
</table>



<ul>
    <li><a href="ItemBorrow3.php"> Borrow New Item</a></li>
</ul>