<link rel="stylesheet" type="text/css" href="Style.css">
<?php

require ('connector.php');

$sqlCourses = "SELECT * FROM courses ORDER BY id";
$coursesResult = mysqli_query($db, $sqlCourses);
?>

<form action="CourseEnroll2.php" method="post">

    <label>Courses - Level - Term - Year - Price:</label>
    <select name="courses">
        <?php
        while($row = mysqli_fetch_assoc($coursesResult)) {
            $id = $row['id'];
            $level = $row['level'];
			$term = $row['term'];
			$year = $row['year'];
			$price = $row['price'];

            echo "<option value=$id>$id - $level -$term - $year - $price</option> \n";
        }
        ?>
		</select><br>
		
	<label>Is Paid? (1 or 0) </label>
	<input type="bool" name="paid"><br>
	
    <input type="submit">
</form>


