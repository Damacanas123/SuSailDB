<script src="https://www.w3schools.com/lib/w3.js"></script>
  <body>
    <div w3-include-html="menu.php"></div>

<script>
w3.includeHTML();
</script>
<div>
  <form action="course_creation_q.php" method="post">
  Level:<br> <input type="number" name="level"><br>
  Term:<br> <select name='term' >
          <option value='spring'>spring</option>
          <option value='fall'>fall</option>
      </select><br>
  Year:<br> <input type="number" name="year"><br>
  Price:<br> <input type="number" name="price"><br>
  <input type="submit">
  </form>
</div>
</body>
