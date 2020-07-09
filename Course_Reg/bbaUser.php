<?php
  include 'databaseConnect.php';


  
?>




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


  <div class="search-container" style="margin-top: 2%;">
    <form action="">
    <label>Search User Id</label>
      <input type="text" placeholder="Search.." name="us_id">
      <button type="submit" name="user_id">Submit</button>
    </form>
  </div>
    <div class="search-container" style="margin-top: 2%;">
    <form action="">
    <label>Search By Semister</label>
      <input type="text" placeholder="Search.." name="sem">
      <button type="submit" name="semister">Submit</button>
    </form>
  </div>

  <div class="search-container" style="margin-top: 2%;">
    <form action="">
    <label>Search By Course Id</label>
      <input type="text" placeholder="Search.." name="c_id">
      <button type="submit" name="course_id">Submit</button>
    </form>
  </div>


 <div class="list">

    
    <div class="main content col-lg-9">
      <div class="courselist" style="margin-top: 3%;">
        <h3 class="clist" style="text-decoration: underline;text-align: center;">CSE User Profile</h3>
      </div>
      <div class="panel panel-default" style="margin-top: 5px;">
        <div class="panel-body">
          <table class="table table-striped table-hover" style="width: 100%">
            <tr>
              <th>No.</th>
              <th>User Name</th>
              <th>Course Id</th>
              
              <th>Course Name</th>
              
              <th>Credit </th>
              <th>Semister</th>
              <th>Action</th>

            </tr>

            <tbody>

            <?php
              $count=0;
              if(isset($_REQUEST['user_id'])){
                $id= $_REQUEST['us_id'];

                $sql = "Select * from user join user_course where user.id = user_course.user_id and user.id = '$id'";


                $res = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($res))
                {
                  $count++;
            ?>
              
              <tr>
                <th><?php echo $count; ?> </th>
                <th> <?php echo $row['name']; ?> </th>
                <th> <?php echo $row['course_id']; ?> </th>
                <th> <?php echo $row['course_name']; ?> </th>
                <th> <?php echo $row['credit']; ?> </th>
                <th> <?php echo $row['semister']; ?> </th>
                <th> <?php echo $row['course_id']; ?> </th>
                
                
                

              </tr>
              <?php
                 }
               } 
               ?>





               <?php
              $count=0;
              if(isset($_REQUEST['semister'])){
                $semister= $_REQUEST['sem'];

               $sql = "Select * from user join user_course where user.id = user_course.user_id and user_course.semister = '$semister'";


                $res = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($res))
                {
                  $count++;
            ?>
              
              <tr>
                <th><?php echo $count; ?> </th>
                <th> <?php echo $row['name']; ?> </th>
                <th> <?php echo $row['course_id']; ?> </th>
                <th> <?php echo $row['course_name']; ?> </th>
                <th> <?php echo $row['credit']; ?> </th>
                <th> <?php echo $row['semister']; ?> </th>
                <th> <?php echo $row['course_id']; ?> </th>
                
                
                

              </tr>
              <?php
                 }
               } 
               ?>

               <?php
              $count=0;
              if(isset($_REQUEST['course_id'])){
               $c_id= $_REQUEST['c_id'];

               $sql = "Select * from user join user_course where user.id = user_course.user_id and user_course.course_id = '$c_id'";


                $res = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($res))
                {
                  $count++;
            ?>
              
              <tr>
                <th><?php echo $count; ?> </th>
                <th> <?php echo $row['name']; ?> </th>
                <th> <?php echo $row['course_id']; ?> </th>
                <th> <?php echo $row['course_name']; ?> </th>
                <th> <?php echo $row['credit']; ?> </th>
                <th> <?php echo $row['semister']; ?> </th>
                <th> <?php echo $row['course_id']; ?> </th>
                
                
                

              </tr>
              <?php
                 }
               } 
               ?>
             
            </tbody>
              
          </table>
        </div>
      </div>
  </div>

  </div>


  <div class="footer">
  <p>@ DIP RAJ</p>
</div>

</body>
</html>