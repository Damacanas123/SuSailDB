<link rel="stylesheet" type="text/css" href="Style.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<body>
<div w3-include-html="menu.php"></div>

<script>
    w3.includeHTML();
</script>
<form action="CommitteeCreationPanel3.php" method="post">

    <label>Committee Name</label>
    <input type="text" name="CommitteeName"><br>

    <label>Budget</label>
    <input type="number" name="Budget"><br>
    <input type="submit">
</form>

