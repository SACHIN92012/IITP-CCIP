<?php

$check = getimagesize($_FILES["image"]["tmp_name"]);
if($check !== false){
    $image = $_FILES['image']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));



$conn=mysqli_connect("db","user","test","myDb");
if(!$conn){
  die('Unable to connect to database');
}
else {
   $email=$_POST['email'];
   $password=md5($_POST['password']);
   $firstName=$_POST['firstName'];
   $lastName=$_POST['lastName'];
   $stmt2="select * from users where user_id='$email'";
   $result1=mysqli_query($conn,$stmt2);
   if(mysqli_num_rows($result1)>0)
   {
     die("Account for this email id already exists\n");
   }
   $stmt="insert into users values('$email','$password','$firstName','$lastName',NULL,NULL);";
   $result=mysqli_query($conn,$stmt);
   //echo $stmt;
   if($result)
   {
     echo "User added successfully<br>";
    echo "<a href='index.html' >Home</a>";
   }
   else echo "failed";

}
  
}


 ?>
