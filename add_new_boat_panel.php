<link rel="stylesheet" type="text/css" href="Style.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<body>
<div w3-include-html="menu.php"></div>

<script>
    w3.includeHTML();
</script>
  <body>
    <div>
      <form action="add_new_boat_q.php" method="post">
      Boat Name: <input type="text" name="name"><br>
      Capacity: <input type="number" name="capacity"><br>
      Notes: <input type="text" name="notes"><br>
      <input type="submit">
      </form>
    </div>
  </body>
