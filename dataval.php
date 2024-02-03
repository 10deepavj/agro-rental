<?php
require 'connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email=$_POST['name'];
  $pwd=$_POST['password'];
  $result = $conn->query("select * from rental where Email = '$email'");
  $row = $result->fetch_assoc();
  $pass= $row['Password'];
  if($pass != $pwd){
    echo '<script>
    alert("Password is wrong");
    window.location.replace("../login.html"); 
    </script>';
  }else{
    echo '<script>
    window.location.replace("../owner.html"); 
    </script>';
  }
}
?>