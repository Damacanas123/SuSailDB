<head>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<script src="https://www.w3schools.com/lib/w3.js"></script>
<body>
<div w3-include-html="menu.php"></div>

<script>
    w3.includeHTML();
</script>
<?php
require ("connector.php");
require ("Queries.php");

$CommitteeResult = mysqli_query($db, $CommitteeQ);
if(!$CommitteeResult){echo "Error";}
echo "<table >
<thead>
    <tr>
        <th>Name</th>
        <th>Budget</th>
    </tr>
    </thead>";
while($row = mysqli_fetch_assoc($CommitteeResult)) {
    $Name = $row['name'];
    $Budget = $row['budget'];

    echo "

            <tr>
          <td>$Name</td>
          <td>$Budget</td>
          </tr>";
}

?>
</table>
<ul>
    <li><a href="CommitteeCreationPanel2.php">Create Committee</a></li>
</ul>


</body>


