<?php
  $conn=mysqli_connect("db","user","test","myDb");
  if(!$conn)
  die("Unable to connect to database");
  $email=$_GET['username'];
  $post_id=$_GET['post_id'];
  $text=$_POST['commentDesc'];
  $check=$_GET['check'];
  $dateTime = date("Y-m-d H:i:s");

  $stmt="insert into comments(user_id,comment_date,post_id,cvalue) values('$email','$dateTime','$post_id','$text');";
  $result=mysqli_query($conn,$stmt);
  header("Location: comments.php?username=$email&post_id=$post_id&check=$check");
  exit;
?>
