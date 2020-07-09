<?php
  include 'databaseConnect.php';
?>

<?php
    if(isset($_REQUEST['submit']))
    {
      $d_id = $_REQUEST["did"];
      $d_nm = $_REQUEST["name"];



      $sql="INSERT INTO `dept`(`dept_id`, `dept_name`) VALUES ('$d_id','$d_nm')";
      mysqli_query($conn,$sql);








       }



               
                    if(isset($_REQUEST['delete']))
                    {
         
                          $id= $_REQUEST["id"];
                          $sql = "DELETE FROM `dept` WHERE dept_id='$id'" ;
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


<div class="container" style="margin-top: 5%;">

    <form action="department.php" style="border:1px solid #ccc" method="post">
      <div class="form">
          <h1 align="center">Create Department</h1>
          
          <label for="id"><b>Department ID</b></label>
          <input type="id" placeholder="Enter Department Id" name="did" required>

          <label for="name"><b>Department Name</b></label>
          <input type="text" placeholder="Enter Department Name" name="name" required>

          <div class="clearfix">
            <button type="submit" class="signupbtn" name="submit">Submit</button>
          </div>
      </div>
    </form>
    
  </div>

      <div class="list">

    
    <div class="main content col-lg-9">
      <div class="courselist" style="margin-top: 3%;">
        <h4 class="clist">Department</h4>
      </div>
      <div class="panel panel-default">
        <div class="panel-body">
          <table class="table table-striped table-hover" style="width: 100%">
            <tr>
              <th>No.</th>
              <th>Department Id</th>
              
              <th>Department</th>
              
              <th>Status </th>
            </tr>

            <tbody>

            <?php
                $sql="select * from dept";
                $res = mysqli_query($conn,$sql);
                $count=0;
                while($row = mysqli_fetch_array($res)){

                  $count++;
              ?>
            <tr>
                <th><?php echo $count;?></th>
                <th><?php echo $row['dept_id']; ?></th>
                <th><?php echo $row['dept_name'];?></th>
                
                 
                <th class="action">
                    <form method="post" action="department.php">
                      <input type="hidden" name="id" value="<?php echo $row['dept_id'];?>">
                     
                      <button type="submit" class="btn btn-primary a-btn-slide-text btn-sm" name="delete">Delete</button>
                     
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



















































