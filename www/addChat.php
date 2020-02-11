<?php
  $conn=mysqli_connect("db","user","test","myDb");
  if(!$conn)
  die("Unable to connect to database");
  $email=$_GET['username'];
  $club_id=$_GET['club_id'];
  $text=$_POST['chatDesc'];
  $check=$_GET['check'];
  $secondname=$_GET['secondname'];
  $dateTime = date("Y-m-d H:i:s");

  $stmt="insert into discussion values('$email','$dateTime','$club_id','$text');";
  $result=mysqli_query($conn,$stmt);
  header("Location: discussion.php?username=$email&secondname=$secondname&club_id=$club_id&check=$check");
  exit;
?>
