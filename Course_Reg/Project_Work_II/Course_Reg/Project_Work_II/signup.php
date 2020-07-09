<?php
  include 'databaseConnect.php';
?>


<?php
    if(isset($_REQUEST['submit']))
    {
      $id=$_REQUEST["id"];
      $nm = $_REQUEST["name"];
      $phn = $_REQUEST["phn"];
      $dept = $_REQUEST["dept"];
      $sess = $_REQUEST["sess"];
      $sec = $_REQUEST["sec"];
      $psw = $_REQUEST["psw"];
      $rep = $_REQUEST["repeat"];

      if ($psw != $rep) {
        header("location: signup.php");
        // echo '<p style="color:red;">password and confirm password should be same</p>';
      }

      else{
        $sql = "INSERT INTO `user`(`id`, `name`, `phone`, `dept`, `section`, `session`, `password`) VALUES ('$id','$nm','$phn', '$dept', '$sec', '$sess', '$psw')";
        mysqli_query($conn,$sql);
      }
    }


    $conn->close();
?>









<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="signup.css">
<body>
	
	<div class="header">
  <a href="#default" class="logo">Course Registration System</a>
  <div class="header-right">
    <a class="active" href="index.php">Home</a>
    <a href="signIn.php">Sign In</a>
    <a href="signUp.php">Sign Up</a>
    <a href="Contact.php">Contact</a>
  </div>
</div>


  <div class="container">

    <div>
        <h1>Registration Form</h1>
    </div>

    <form action="signup.php" method="post">
      <div>
        <label>Student Id :</label>
        <input type="text" name="id" placeholder="Student Id">
      </div>

      <div>
        <label>Student Name :</label>
        <input type="text" name="name" placeholder="Student Name">
      </div>

      <div>
        <label>Student Phone :</label>
        <input type="text" name="phn" placeholder="Student Phone">
      </div>

      <div>
        <label>Department :</label>
        <input type="text" name="dept" placeholder="Department">
      </div>

      <div>
        <label>Session :</label>
        <input type="text" name="sess" placeholder="Session">
      </div>

      <div>
        <label>Section :</label>
        <input type="text" name="sec" placeholder="Section">
      </div>
      

      <div>
        <label>Password :</label>
        <input type="text" name="psw" placeholder="Password">
      </div>
      
      <div>
        <label>Repeat Password :</label>
        <input type="text" name="repeat" placeholder="Repeat Password">
      </div>
      
      <div>
        <button type="submit" name="submit">Registration</button>
      </div>
    </form>
    
  </div>



</body>


<div class="footer">
  <p>@ DIP RAJ</p>
</div>
</html>





