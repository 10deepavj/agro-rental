<?php
require 'connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name =$_POST['username'];
  $email =$_POST['email'];
  $pwd =$_POST['password']; 

  $sql = "insert into rental values('$name','$email','$pwd')";

  if(mysqli_query($conn,$sql)){
    echo '<script>
      alert("Succesfuly registerd");
      window.location.replace("../login.html"); 
      </script>';
  }
  else{
    echo "Error : ".mysqli_error($conn);
  }


}


?>