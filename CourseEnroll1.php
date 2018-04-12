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
if (isset($_COOKIE['MemberId'])) {
    $sid = $_COOKIE['MemberId'];
}


$EnrResult = mysqli_query($db, $CourseEnrQ);
if(!$EnrResult){echo "Error";}
echo "<table class = \"navigation-bar3\">
<thead>
    <tr>
        <th>Level</th>
        <th>Term</th>
         <th>Year</th>
		 <th>Price</th>
		 
    </tr>
    </thead>";
while($row = mysqli_fetch_assoc($EnrResult)) {
    $cid = $row['id'];
    $level = $row['level'];
    $term = $row['term'];
    $year = $row['year'];
    $price = $row['price'];

    $MemberAttends = 0;

    $MemberAttendsQ = "SELECT * FROM attendsc WHERE attendsc.cid = $cid AND attendsc.sid = $sid";
    $res_temp = mysqli_query($db, $MemberAttendsQ);
    if( mysqli_fetch_assoc($res_temp))
    {
        $MemberAttends = 1;
    }
    if($MemberAttends)
    { echo "<tr>
          <td>$level</td>
          <td>$term</td>
          <td>$year</td>
          <td>$price</td>
		  <td>attending</td>
          </tr>";
    }
    else
    {
        echo	"<tr>
           <td>$level</td>
          <td>$term</td>
          <td>$year</td>
          <td>$price</td>
		  <td><a href='CourseEnroll2.php?sid=$sid&cid=$cid'>attend!</a></td>
          </tr>";

    }
}
?>
</table>