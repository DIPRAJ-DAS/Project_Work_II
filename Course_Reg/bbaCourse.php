<?php
  include 'databaseConnect.php';
?>

<?php

   if(isset($_REQUEST['delete']))
    {
         $id= $_REQUEST["id"];
         $sql = "DELETE FROM `course_list` WHERE course_id='$id'" ;
            mysqli_query($conn,$sql);

      }

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

 <div class="list">

    
    <div class="main content col-lg-9">
      <div class="courselist" style="margin-top: 3%;">
        <h3 class="clist" style="text-decoration: underline;text-align: center;">BBA Course List</h3>
      </div>
      <div class="panel panel-default" style="margin-top: 5px;">
        <div class="panel-body">
          <table class="table table-striped table-hover" style="width: 100%">
            <tr>
              <th>No.</th>
              <th>Course Id</th>
              
              <th>Course Name</th>
              
              <th>Credit </th>
              <th>Semister </th>
              <th>Session</th>
              <th>Action</th>

            </tr>

           <tbody>

              <?php
                $s = "BBA";
                $sql="SELECT * FROM `course_list` where `department` = '$s' ORDER BY `course_id`";
                $res = mysqli_query($conn,$sql);
                  $count=0;
                while($row = mysqli_fetch_array($res))
                {

                  $count++;
              ?>
              
              <tr>
                <th><?php echo $count; ?></th>
                <th><?php echo $row['course_id']; ?></th>
                <th><?php echo $row['course_name']; ?></th>
                <th><?php echo $row['credit']; ?></th>
                <th><?php echo $row['semister'];?></th>
                <th><?php echo $row['session'];?></th>
                <th>

                   <form method="post" action="bbaCourse.php">
                      <input type="hidden" name="id" value="<?php echo $row['course_id'];?>">
                     
                      <button type="submit" class="id" name="delete" style="float: center;">Delete</button>
                     
                    </form>
                  
                </th>
               
                  <?php } ?>
              </tr>
             
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

