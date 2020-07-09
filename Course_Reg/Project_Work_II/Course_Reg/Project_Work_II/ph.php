  if(isset($_REQUEST['submit']))
    {
      $id= $_REQUEST["id"];
      $name=$_REQUEST["name"];
      $phone=$_REQUEST["phone"];
      $dept=$_REQUEST["dept"];
      $sec=$_REQUEST["sec"];
      $sess=$_REQUEST["sess"];
      $password=$_REQUEST["psw"];
      $repeat_password=$_REQUEST["repeat"];

      if ($password != $repeat_password) {
        header("location: signup.php");
        // echo '<p style="color:red;">password and confirm password should be same</p>';
      }
      else{
        echo "string";
        $sql = "INSERT INTO `users`(`user_id`, `user_name`, `user_cell`, `department`, `setion`, `session`, `password`) VALUES ($id,$name,$phone,$dept,$sec,$sess,
        $password)";
        mysqli_query($conn,$sql);
       
       
        
      }
      
    }
    $conn->close();