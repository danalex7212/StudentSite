<html>
<head>
    <title>Delete Student </title>
  <link rel="stylesheet" href="style.css" type="text/css" >
</head>
<body>
  <nav>
  <ul  >
  <li><a href="getstudentinfo.php">Get Student Info</a></li>
  <li><a href="addstudent.php">Add Student</a></li>
  <li><a href="deletestudent.php">Delete Student</a></li>
  </ul>
</nav>
<div>
  <form action="http://localhost:81/site2/Documents/studentdelete.php" method="post">
    <b> Delete a  Student </b>
    <p>First Name:
      <input type='text' name = "first_name" size="30" value="" />
    </p>
    <p>
      <input type="submit" name="submit" value="Delete" />
    </p>
  </form>
</div>
</body>

</html>
