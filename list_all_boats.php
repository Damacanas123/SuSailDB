

<?php
require ("connector.php");

$ListBoatsQ = "SELECT * FROM `boats` ORDER BY `id`";



$ListBoatsResult = mysqli_query($db, $ListBoatsQ);

?>
<script src="https://www.w3schools.com/lib/w3.js"></script>
  <body>
    <div w3-include-html="menu.php"></div>

<script>
w3.includeHTML();
</script>
    <div>
    <table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Boat Name</th>
        <th>Capacity</th>
        <th>Notes</th>

    </tr>
    </thead>
    </div>
    <div>
    <tbody>
      <div>

      <?php
      while($row = mysqli_fetch_assoc($ListBoatsResult)) {
          $id = $row['id'];
          $name = $row['name'];
          $capacity = $row['capacity'];
          $notes= $row['notes'];


          echo "<tr>
                <td>$id</td>
                <td>$name</td>
                <td>$capacity</td>
                <td>$notes</td>

                </tr>";
      }
      ?>
      </div>
    </tbody>
    </table>
    </div>
  </body>
