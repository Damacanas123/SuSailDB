<script src="https://www.w3schools.com/lib/w3.js"></script>
  <body>
    <div w3-include-html="menu.php"></div>

<script>
w3.includeHTML();
</script>

<head>
    <link rel="stylesheet" type="text/css" href="CssStyle.css">
</head>

<?php


require ('connector.php');
$ListEventQ = "SELECT * FROM `events` ORDER BY `date`";



$ListEventResult = mysqli_query($db, $ListEventQ);

?>

<table>
    <thead>
    <tr>
        <th>Event ID</th>
        <th>Event Name</th>
		<th>Event Type</th>
        <th>Price</th>
		<th>Date</th>
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

    echo "<tr>
          <td>$eid</td>
		  <td><a href='EventUpdate.php?ID=$eid'>$ename</a></td>
          <td>$etype</td>
		  <td>$eprice</td>
          <td>$edate</td>
          </tr>";
}
?>
</tbody>
</table>
<body>
<form action="AddEvent.php" method="post">

    <label>Name</label>
	<input type='text' name ='ename'> 
	<label>Date</label>
    <input type='date' name='edate'><br>
	<label>Type</label>
	<input type='text' name ='etype'> 
	<label>Price</label>
	<input type='number' name ='eprice' min='0'> 
	    <input type='submit'>
</form>
</body>
    

