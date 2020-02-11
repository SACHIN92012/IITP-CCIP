<?php
  $conn=mysqli_connect("db","user","test","myDb");
  if(!$conn)
  die("Unable to connect to database");
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">




<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="css/style.css" rel="stylesheet">






<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #474e5d;
  font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }

  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }

  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }

  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
</style>
</head>
<body>

<h1>




    <header id="header">
      <div class="container-fluid">

        <div id="logo" class="pull-left">
          <h1><a href="#intro" class="scrollto">IITP-CCIP</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <?php
        $hello=$_GET['username'];
        $stmt9="select * from isadmin where admin_id='$hello';";
        $result9=mysqli_query($conn,$stmt9);
        $row9=mysqli_fetch_assoc($result9);
         ?>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a href=""><?php echo $_GET['username'] ?></a></li>
            <li><a href="discussion.php?username=<?php echo $_GET['username'] ?>(admin)&secondname=<?php echo $_GET['username'] ?>&club_id=<?php echo $row9['Club_Id'] ?>&check=1">Discussion Forum</a></li>
            <li><a href="index.html">LogOut</a></li>
          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
    </header><!-- #header -->




  <?php
  // Start the session
  //session_start();
 echo $_GET["username"];
 $hname=$_GET["username"];
   ?>
</h1>


<div class="container right">
  <div class="content">
    <h2>New Post</h2>
    <form  action="addPosts.php?varname=<?php echo $hname ?>" method="post">
      <label for="heading">Heading</label><br>
      <input type="text" id="heading" name="heading" placeholder="heading"><br>
      <label for="postDesc">Description</label><br>
      <textarea rows="5" cols="70" name="postDesc" id="postDesc" placeholder="Description"></textarea><br>
      Select image to upload:
      <input type="file" name="image"/><br>
      <input type="submit" value="submit post">
    </form>
  </div>
</div>

<?php $num=0;
$username=$_GET['username'];
$stmt="select Theading,TValue,Post_Date,texts.post_id as post_id from texts,posts where texts.post_id=posts.post_id and texts.post_id in(select post_id from posts where club_id in (select club_id from isadmin where admin_id='$username') ) order by texts.post_id desc;";
$result=mysqli_query($conn,$stmt);
while($row=mysqli_fetch_assoc($result))
{
  ?>
<div class="timeline">
  <div class="container left">
    <div class="content">
      <h2><?php echo $row['Theading']; ?></h2>
      <h5><?php echo $row['Post_Date']; ?></h5>
      <img src="about-plan.jpg" width='300' height="200">
      <p><?php echo $row['TValue']; ?></p>
      <p><a href="comments.php?username=<?php echo $username; ?>&post_id=<?php echo $row['post_id']; ?>&check=1" >comments</a></p>
    </div>
  </div>
  <?php
  if(!($row=mysqli_fetch_assoc($result)))
  break;
  ?>
  <div class="container right">
    <div class="content">
      <h2><?php echo $row['Theading']; ?></h2>
      <h5><?php echo $row['Post_Date']; ?></h5>
      <img src="about-plan.jpg" width='300' height="200">
      <p><?php echo $row['TValue']; ?></p>
      <p><a href="comments.php?username=<?php echo $username; ?>&post_id=<?php echo $row['post_id']; ?>&check=1" >comments</a></p>
    </div>
  </div>
  <?php
} ?>

</div>

</body>
</html>
