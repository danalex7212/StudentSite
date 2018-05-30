<html>

  <head>
      <title>DeleteStudent </title>
    <link rel="stylesheet" href="style.css" type="text/css" >
  </head>
  <body>
    <ul>
<li><a href="getstudentinfo.php">Get Student Info</a></li>
<li><a href="addstudent.php">Add Student</a></li>
<li><a href="deletestudent.php">Delete Student</a></li>
    </ul>
      <?php
        if(isset($_POST['submit']))
        {
          require_once('../mysqli_connect.php');

          $f_name= $_POST['first_name'] ;
          $query = " DELETE FROM students WHERE first_name=  '".$f_name."' ";

          $response=mysqli_query($dbc,$query);
          $affected_rows = mysqli_affected_rows($dbc);
          if ($response && $affected_rows==1)
          {
           echo "Student Deleted";
           mysqli_close($dbc);
         }
            else {
              echo "No student has been deleted" . mysqli_error($dbc) ;
              mysqli_close($dbc);
            }

        }
        ?>
</body>
</html>
