<?php
  $conn=mysqli_connect("db","user","test","myDb");
  if(!$conn)
  die("Unable to connect to database");

  $email=$_GET['varname'];
  $heading=$_POST['heading'];
  $postDesc=$_POST['postDesc'];
  $stmt="select club_Id from isadmin where admin_Id='$email';";
  $result=mysqli_query($conn,$stmt);
  // if($result)
  // echo "yes";
  $row=mysqli_fetch_assoc($result);
  $temp=$row['club_Id'];
  $dateTime = date("Y-m-d H:i:s");
  $stmt2="insert into posts(club_Id,post_Date) values('$temp','$dateTime');";
  $result2=mysqli_query($conn,$stmt2);
  // if($result2)
  // echo "yes2";
  $temp2=$row['club_Id'];
  $stmt="select max(post_Id) as p_id from posts where club_Id='$temp2';";
  $result=mysqli_query($conn,$stmt);
  $row=mysqli_fetch_assoc($result);
  $temp3=$row['p_id'];
  $stmt3="insert into texts(theading,tvalue,post_id) values('$heading','$postDesc','$temp3');";
  $result3=mysqli_query($conn,$stmt3);
  // if($result)
  // echo "yes3";


   header("Location: adminTimeline.php?username=$email&check1=1");
    exit;

 ?>

 
