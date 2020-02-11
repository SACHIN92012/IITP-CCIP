<?php
// Start the session
$conn=mysqli_connect("db","user","test","myDb");
if(!$conn)
die("Unable to connect to database");
else {

  $radio=$_POST['userAdmin'];
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  if($radio=="user")
  {
    $stmt="Select * from users where user_id='$email';";
    $result=mysqli_query($conn,$stmt);
    $result1=mysqli_query($conn,$stmt);
    $num=0;
    while($row=$result->fetch_assoc())
    {
      $num=$num+1;
    }
    if($num==0)
    {
      echo "incorrect username or password";
    }
    else {
      $row=$result1->fetch_assoc();
      if($password!=$row['UPwd'])
      {
        echo "incorrect username or password";
      }
      else {
        header("Location: userHome.php?username=$email");
        exit;
        echo "user logged in";
      }
    }
  }
  else
  {
    $stmt="Select * from admins where admin_id='$email';";
    $result=mysqli_query($conn,$stmt);
    $result1=mysqli_query($conn,$stmt);
    $num=0;
    while($row=$result->fetch_assoc())
    {
      $num=$num+1;
    }
    if($num==0)
    {
      echo "incorrect username or password";
    }
    else {
      $row=$result1->fetch_assoc();
      if($password!=$row['APwd'])
      {
        echo "incorrect username or password";
      }
      else {
        header("Location: adminTimeline.php?username=$email");
        exit;
        echo "Admin logged in";
      }
    }
  }
}


 ?>
