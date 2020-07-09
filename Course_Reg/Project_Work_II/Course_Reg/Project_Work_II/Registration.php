<?php
  include 'databaseConnect.php';
?>




<?php
    if (isset($_REQUEST['submit'])) {
      # code...
      $cid = $_REQUEST['cId'];
      $cname = $_REQUEST['cname'];
      $cre = $_REQUEST['credit'];
      $semister = $_REQUEST['sem'];
      $department = $_REQUEST['dept'];
      $status = $_REQUEST['status'];
      



      $sql = "INSERT INTO `user_course`(`course_id`, `course_name`, `semister`, `department`, `credit`, `status`) VALUES ('$cid','$cname','$semister','$department','$cre','$status')";
      mysqli_query($conn,$sql);
    }




                    if(isset($_REQUEST['delete']))
                    {
         
                          $id= $_REQUEST["id"];
                          $sql = "DELETE FROM `user_course` WHERE course_id='$id'" ;
                          mysqli_query($conn,$sql);

                    }

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
<form action="Registration.php" style="border:1px solid #ccc" method="post">
      <div class="form">
          <h1 align="center">Registration Page</h1>
          
          <label for="cId"><b>Course Id</b></label>
          <input type="text" placeholder="cId" name="cId" required>

          <label for="cname"><b>Course Name</b></label>
          <input type="text" placeholder="cname" name="cname" required>

          <label for="credit"><b>Credit</b></label>
          <input type="text" placeholder="credit" name="credit" required>
          <br>

          <label for="dept"><b>Department</b></label>
          <input type="text" placeholder="dept" name="dept" required>

          <label for="sem"><b>Semister</b></label>
          <input type="text" placeholder="sem" name="sem" required>
        <select style="margin-top: 15px; margin-left: 35px; font-family: arial; width: 10%; background-color: #B2BEB5; font-size: medium;border:solid 1px; border-color: inherit;" name="status">
          <option value="Regular">
            Regular
          </option>
          <option value="Drop">
            Drop
          </option>
          <option value="Fail">
            Fail
          </option>
        </select>

          
          
          

          <div class="clearfix">
            <button type="submit" class="submitbtn" name="submit">Submit</button>
          </div>
      </div>
    </form>

    <div class="list">

    
    <div class="main content col-lg-9">
      <div class="courselist">
        <h4 class="clist">Courses</h4>
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
              <th>Action</th>

            </tr>

            <tbody>
               <?php
                $sql="select * from user_course";
                $res = mysqli_query($conn,$sql);
                $count=0;
                while($row = mysqli_fetch_array($res)){

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
                <th>
                  <form method="post" action="Registration.php">
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

  
          
          
          

          
 

     
  

  


</body>



</html>





