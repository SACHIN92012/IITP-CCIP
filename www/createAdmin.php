<?php

// $check = getimagesize($_FILES["image"]["tmp_name"]);
// if($check !== false){
//     $image = $_FILES['image']['tmp_name'];
//     $imgContent = addslashes(file_get_contents($image));



$conn=mysqli_connect("db","user","test","myDb");
if(!$conn){
  die('Unable to connect to database');
}
else {
   $email=$_POST['email'];
   $password=md5($_POST['password']);
   $firstName=$_POST['firstName'];
   $lastName=$_POST['lastName'];
   $clubId=$_POST['clubId'];
   $clubName=$_POST['clubName'];
   $clubDesc=$_POST['clubDesc'];

   $stmt2="select * from admins where admin_id='$email'";
  $stmt3="select * form clubs where clubId='$clubId'";
   $result1=mysqli_query($conn,$stmt2);
   $result2=mysqli_query($conn,$stmt3);
   if(mysqli_num_rows($result1)>0)
   {
     die("Account for this email id already exists<br>");
   }
   else if(mysqli_num_rows($result2)>0)
    {
      die("This clubId already exists try new one<br>");
    }
   $stmt="insert into admins values('$email','$password','$firstName','$lastName',NULL);";
   $stmt4="insert into clubs values('$clubId','$clubName',NULL,'$clubDesc',0);";
   $stmt5="insert into isadmin values('$email','$clubId');";
  // $result=mysqli_query($conn,$stmt);
  $result=$conn->query($stmt);
  $result4=$conn->query($stmt4);
    $result5=$conn->query($stmt5);
  // echo $stmt."<br>";

   if($result && $result4 && $result5)
   {
     echo "Admin and Club added successfully<br>";
    echo "<a href='index.html' >Home</a>";
   }
   else echo "failed";

//}


}


 ?>
