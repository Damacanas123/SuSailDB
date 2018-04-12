<link rel="stylesheet" type="text/css" href="Style.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
  <body>
    <div w3-include-html="menu.php"></div>

<script>
w3.includeHTML();
</script>
    <div>
      <form action="member_registration_q.php" method="post">
      Name: <input type="text" name="name"><br>
      E-mail: <input type="text" name="email"><br>
      Phone: <input type="number" name="phone"><br>
          Gender
          <select name='gender' >
              <option value='erk'>erk</option>
              <option value='kiz'>kiz</option>
          </select><br>
      Level: <input type="number" name="level"><br>
      Pwprd: <input type="text" name="pword"><br>
      <input type="submit">
      </form>
    </div>
  </body>
