<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="admin.css">
<link rel="stylesheet" type="text/css" href="index.css">


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

<div class="footer">
  <p>@ DIP RAJ</p>
</div>

</body>
</html>

