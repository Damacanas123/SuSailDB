<script src="https://www.w3schools.com/lib/w3.js"></script>
  <body>
    <div w3-include-html="menu.php"></div>

<script>
w3.includeHTML();
</script>

<?php

require ('connector.php');
$ListItemsQ = "SELECT * FROM `inventory` ORDER BY `id`";

$ListItemsResult = mysqli_query($db, $ListItemsQ);

?>

<table>
    <thead>
    <tr>
        <th>Item ID</th>
        <th>Name</th>
        <th>Status</th>
        <th>Notes</th>
    </tr>
    </thead>
    <tbody>



<?php
while($row = mysqli_fetch_assoc($ListItemsResult)) {
    $iid = $row['id'];
    $iname = $row['name'];
    $istatus = $row['status'];
    $inotes= $row['notes'];

    echo "<tr>
          <td>$iid</td>
          <td>$iname</td>
          <td>$istatus</td>
          <td>$inotes</td>
          </tr>";
}
?>
</table>

<form action="AddItem.php" method="post">

    <label>Name</label>
	<input type='text' name ='iname'> 
	<label>Status</label>
        <select name="istatus">
		<option value='available'>available</option>
		<option value='unavailable'>unavailable</option>
    </select><br>
	<label>Notes</label>
	<input type='text' name ='inotes'> 
	
	    <input type='submit'>
</form>

    </tbody>
