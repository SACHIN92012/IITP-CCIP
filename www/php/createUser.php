<?php
$conn=mysqli_connect("localhost","root","","ccip");
if(!$conn){
  die('Unable to connect to database');
}
else {
  echo "hello world";
  // $username=$_POST['username'];
  // $password=md5($_POST['password']);
  // $stmt2="select username from sachin where username='$username';";
  // echo $stmt2."\n";
  // $result1=mysqli_query($conn,$stmt2);
  // $h= mysqli_num_rows($result1);
  // echo $h."  hello hi bye bye\n";
  // if($h>0)
  // echo "Username is already taken";
  // else echo "Can make username of this name";
}


 ?>
