

<?php
require ("connector.php");

$ListCoursesQ = "SELECT * FROM `courses` ORDER BY `id`";



$ListCoursesResult = mysqli_query($db, $ListCoursesQ);

?>
<script src="https://www.w3schools.com/lib/w3.js"></script>
  <body>
    <div w3-include-html="menu.php"></div> 

<script>
w3.includeHTML();
</script>
    <table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Level</th>
        <th>Term</th>
        <th>Year</th>
        <th>Price</th>

    </tr>
    </thead>
    </div>
    <div>
    <tbody>
      <div>

      <?php
      while($row = mysqli_fetch_assoc($ListCoursesResult)) {
          $id = $row['id'];
          $level = $row['level'];
          $term = $row['term'];
          $year= $row['year'];
          $price= $row['price'];


          echo "<tr>
                <td>$id</td>
                <td>$level</td>
                <td>$term</td>
                <td>$year</td>
                <td>$price</td>
                </tr>";
      }
      ?>
      </div>
    </tbody>
    </table>
    </div>
  </body>
