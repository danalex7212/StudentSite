<html>

  <head>
    <title>Add Student </title>
    <link rel="stylesheet" href="style.css" type="text/css" >
  
  </head>
  <body>
    <nav>
    <ul>
<li><a href="getstudentinfo.php">Get Student Info</a></li>
<li><a href="addstudent.php">Add Student</a></li>
<li><a href="deletestudent.php">Delete Student</a></li>
    </ul>
  </nav>
  <div>
    <form action="http://localhost:81/site2/Documents/studentadded.php" method="post">
      <b> Add a New Student </b>
      <p>First Name:
        <input type='text' name = "first_name" size="30" value="" />
      </p>
      <p>Last Name:
        <input type='text' name = "last_name" size="30" value="" />
      </p>
      <p>Email:
        <input type='text' name = "email" size="30" value="" />
      </p>
      <p>Street:
        <input type='text' name = "street" size="30" value="" />
      </p>
      <p>City:
        <input type='text' name = "city" size="30" value="" />
      </p>
      <p>State:
        <input type='text' name = "state" size="30" maxlength ="2" value="" />
      </p>
      <p>Zip Code:
        <input type='text' name = "zip" size="30" maxlength = "5" value="" />
      </p>
      <p>Phone Number:
        <input type='text' name = "phone" size="30" value="" />
      </p>
      <p>Birth Date(YYYY-MM-DD):
        <input type='text' name = "birth_date" size="30" value="" />
      </p>
      <p>Sex:
        <input type='text' name = "sex" size="30" maxlength = "1" value="" />
      </p>
      <p>Lunch Cost:
        <input type='text' name = "lunch" size="30" value="" />
      </p>
      <p>
        <input type="submit" name="submit" value="Send" />
      </p>


    </form>
  </div>
  </body>

</html>
