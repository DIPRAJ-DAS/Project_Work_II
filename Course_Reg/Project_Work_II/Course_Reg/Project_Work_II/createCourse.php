<?php
  include 'databaseConnect.php';
?>

<?php
    if(isset($_REQUEST['submit']))
    {
      $c_id = $_REQUEST["cid"];
      $c_nm = $_REQUEST["name"];
      $semister = $_REQUEST["sem"];
      $session = $_REQUEST["sess"];
      $department = $_REQUEST["dept"];
      $credit = $_REQUEST["cre"];


      $sql="INSERT INTO `course_list`(`course_id`, `course_name`, `semister`, `department`, `session`, `credit`) VALUES ('$c_id','$c_nm','$semister','$department','$session','$credit')";

      mysqli_query($conn,$sql);








       }
?>






















<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="admin.css">
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="createCourse.css">


</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="admin.php" class="active">Admin</a>
  <div class="dropdown">
    <button class="dropbtn">User List 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="cseUser.php">CSE</a>
      <a href="bbaUser.php">BBA</a>
      
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Course 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="cseCourse.php">CSE</a>
      <a href="bbaCourse.php">BBA</a>
    
    </div>
  </div>
  
 
  <a href="createCourse.php">Create Crouse</a>
  <a href="department.php">Departments</a>
  <a href="index.php">Log Out</a>

  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>





</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


<h3 style="margin-top: 5%; text-align: center;">Create Course</h3>

<div>
  <form action="createCourse.php">
    <label for="id">Course Id</label>
    <input type="id" name="cid" placeholder="Course Id">

    <label for="name">Course Name</label>
    <input type="text" name="name" placeholder="Course Name">

    <label for="sem">Semister</label>
    <input type="text" name="sem" placeholder="Semister">

    <label for="sess">Session</label>
    <input type="text" name="sess" placeholder="Session">

    <label for="dept">Department</label>
    <input type="text"  name="dept" placeholder="Department">

    <label for="cre">Credit</label>
    <input type="text" name="cre" placeholder="Credit">

    
      
      <div>
        <button type="submit" name="submit">Submit</button>
      </div>
    </form>
    
  </div>

  <div class="footer">
  <p>@ DIP RAJ</p>
</div>


</body>
</html>



















































