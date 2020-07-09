<?php
  include 'databaseConnect.php';

?>




<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="Registration.css">
<body>
	
	<div class="header">
  <a href="#default" class="logo">Course Registration System</a>
  <div class="header-right">
    <a class="active" href="index.php">Home</a>
    <a href="signIn.php">Sign In</a>
    <a href="signUp.php">Sign Up</a>
    <a href="Contact.php">Contact</a>
    <a href="Registration.php">Registration</a>
    <a href="student.php">Taken Courses</a>
    <a href="drop.php">Drop Courses</a>
    <a href="index.php">Log Out</a>



  </div>
</div>

<div class="list">

    
    <div class="main content col-lg-9">
      <div class="courselist">
        <h4 class="clist">Drop Courses</h4>
      </div>
      <div class="panel panel-default">
        <div class="panel-body">
          <table class="table table-striped table-hover" style="width: 100%">
            <tr>
              <th>No.</th>
              <th>Course Id</th>
              <th>Course Name </th>
              <th>Credit</th>
              <th>Department</th>
              <th>Semister</th>
              <th>Status </th>
            </tr>

            <tbody>

            <?php
              $s = "Fail";
              $s1 = "Drop";
              $sql="SELECT * FROM `user_course` where `status` = '$s' or `status` = '$s1' ORDER BY `course_id`";
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
                <th><?php echo $row['department'];?></th>
                <th><?php echo $row['semister'];?></th>
                <th><?php echo $row['status']; ?></th>

                <?php } ?>
                
              </tr>
             
            </tbody>
              
          </table>
        </div>
      </div>
  </div>

  </div>


</body>


<div class="footer">
  <p>@ DIP RAJ</p>
</div>
</html>





