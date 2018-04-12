<link rel="stylesheet" type="text/css" href="Style.css">
<?php
require ("connector.php");
require ("Queries.php");

$ListMembersQ = "SELECT * FROM `members` ORDER BY `id`";



$ListMembersResult = mysqli_query($db, $ListMembersQ);
$Complicated1Result = mysqli_query($db,$Complicated1);
$Complicated2Result = mysqli_query($db,$Complicated2);

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
        <th>Name</th>
        <th>email</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Level</th>
        <th>Pword</th>
    </tr>
    </thead>
    <tbody>

      <?php
      while($row = mysqli_fetch_assoc($ListMembersResult)) {
          $id = $row['id'];
          $name = $row['name'];
          $email = $row['email'];
          $phone= $row['phone'];
          $gender= $row['gender'];
          $level= $row['level'];
          $pword = $row['pword'];
          echo "<tr>

                <td> $id </td>
                <td><a href='member_update_panel.php?ID=$id'>$name</a></td>
                <td>$email</td>
                <td>$phone</td>
                <td>$gender</td>
                <td>$level</td>
                <td>$pword</td>


                </tr>

                ";
      }
      ?>

    </tbody>
    </table>


    <ul>list the names of the members who borrowed all the items and list the events they attended<br></ul>
    <table>
        <thead>
        <tr>
            <th>Member Name</th>
            <th>Event Name</th>
        </tr>
        </thead>
        <tbody>

        <?php
        while($row = mysqli_fetch_assoc($Complicated1Result)) {
            $mname = $row['mname'];
            $ename = $row['ename'];
            echo "<tr>

                <td> $mname </td>
                <td>$ename</td>


                </tr>

                ";
        }
        ?>

        </tbody>
    </table>
    <ul>List all the members with level 3 and their total borrowed item count</ul>
    <tbody>

    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Total Item Borrowed</th>
        </tr>
        </thead>
        <tbody>

        <?php
        while($row = mysqli_fetch_assoc($Complicated2Result)) {
            $name = $row['name'];
            $totalItemBorrowed = $row['totalItemBorrowed'];
            echo "<tr>

                <td> $name </td>
                <td>$totalItemBorrowed</td>


                </tr>

                ";
        }
        ?>

        </tbody>
    </table>

  </body>
