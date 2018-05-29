<html>

  <head>
    <title>Add Student </title>
    <style>
  ul li{
    text-align: center;
    display: inline;
    padding:10px;
  }
    </style>
  </head>
  <body>
    <ul>
<li><a href="getstudentinfo.php">Get Student Info</a></li>
<li><a href="addstudent.php">Add Student</a></li>response=@
    </ul>
      <?php
        if(isset($_POST['submit']))
        {
          require_once('../mysqli_connect.php');

          $f_name= $_POST['first_name'] ;
          $query = " DELETE FROM students WHERE first_name=  '".$f_name."' ";

          $response=mysqli_query($dbc,$query);
          if ($response)
          {
           echo "Student Deleted";
           mysqli_close($dbc);
         }
            else {
              echo "error" . mysqli_error($dbc) ;
              mysqli_close($dbc);
            }

        }
        ?>
</body>
</html>
