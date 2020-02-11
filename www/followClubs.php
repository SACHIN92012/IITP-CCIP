<?php
$conn=mysqli_connect("db","user","test","myDb");
if(!$conn)
die("Unable to connect to database");

$username=$_GET['username'];
$club_id=$_GET['club_id'];
$check=$_GET['check'];
$stmt="";
if($check==2)
$stmt="insert into followings values('$username','$club_id');";
else
$stmt="delete from followings where user_id='$username' and club_id='$club_id';";
$result=mysqli_query($conn,$stmt);
header("Location: userHome.php?username=$username");
exit;
 ?>
