<html>
<head>
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
<?php

require_once('../mysqli_connect.php');
$query = " SELECT student_id,first_name, last_name, email, street, city, state,zip,phone,birth_date FROM students" ;

$response = @mysqli_query($dbc, $query);
if ($response)
{
echo '<table align="left"
cellspacing = "5" cellpadding ="8" >
<tr>
      <td align = "center" > <b> ID</b></td>
      <td align = "center" > <b> First Name</b></td>
      <td align = "center" > <b> Last Name</b></td>
      <td align = "center" > <b> Email</b></td>
      <td align = "center" > <b> Street</b></td>
      <td align = "center" > <b> City</b></td>
      <td align = "center" > <b> State</b></td>
      <td align = "center" > <b> Zip</b></td>
      <td align = "center" > <b> Phone</b></td>
      <td align = "center" > <b> Birth Day</b></td>
</tr>';
while($row= mysqli_fetch_array($response))
      {
    echo '<tr><td align="left"> '. $row['student_id'] .
    '<td align="left"> '. $row['first_name'] .
    '</td> <td align="left" >'. $row['last_name'] .
     '</td><td align="left"> ' .  $row['email'] .
     '</td><td align="left"> ' .  $row['street'] .
     '</td><td align="left"> ' .  $row['city'] .
     '</td><td align="left"> ' .  $row['state'] .
     '</td><td align="left"> ' .  $row['zip'] .
     '</td><td align="left"> ' .  $row['phone'] .
     '</td><td align="left"> ' .  $row['birth_date'] .
     '</td></tr>';
      }
      echo '</table>';
}
else
{
  echo "Couldnt issue database query";
  echo mysqli_error($dbc);
}
mysqli_close($dbc);
 ?>
</div>
</body>
</html>
