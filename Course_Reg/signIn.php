<?php
  include 'databaseConnect.php';
?>

<?php

    if(isset($_POST['submit']))
    {
      $id=$_POST['id'];
      $password=$_POST['psw'];
      $sql="SELECT * FROM `user` WHERE id='$id' AND password='$password' ";
      $res=mysqli_query($conn,$sql);
      $data = mysqli_fetch_array($res);
     


      
        session_start();
        $_SESSION['id']=$id;
        $_SESSION['password']=$password;
        session_write_close();
        header("location: student.php");
    }
      
      






?>





















<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="signin.css">
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
<div class="container" >
    
    <form  method="post" action="signin.php">
      <div class="form">
        <h2 align="center">Login</h2>

      <label for="uname"><b>Student ID</b></label>
      <input type="id" placeholder="Enter Id" name="id" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
          
      <button type="submit" name="submit">Login</button>
    </div>
    </form>
  </div>


</body>


<div class="footer">
  <p>@ DIP RAJ</p>
</div>
</html>