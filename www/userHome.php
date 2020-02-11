<?php
  $conn=mysqli_connect("db","user","test","myDb");
  if(!$conn)
  die("Unable to connect to database");
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>User Home</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">IITP-CCIP</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>



      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">User Home</a></li>
          <li><a href="#portfolio">Your Clubs</a></li>
          <!-- <li><a href="#services">Clubs</a></li> -->
          <li><a href="#portfolio2">More Clubs</a></li>
          <li><a href="index.html">LogOut</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Welcome to IIT Patna CCIP</h2>
                <p>IIT Patna Club Collaboration and Interaction Platform</p>
                <?php $username=$_GET['username'];?>
                <a href="userTimeline.php?username=<?php echo $username ?>" class="btn-get-started scrollto">Timeline</a>
              </div>
            </div>
          </div>


        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">



    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Your Clubs</h3>
        </header>

        <!-- <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Academics</li>
              <li data-filter=".filter-card">Sports</li>
              <li data-filter=".filter-web">Cultural</li>
            </ul>
          </div>
        </div> -->
<div class="row portfolio-container">
        <?php

        $stmt="select * from clubs where club_id in(select club_id from followings where user_id ='$username');";
        $result =mysqli_query($conn,$stmt);
        while($row=mysqli_fetch_assoc($result))
        {
         ?>

<a href="discussion.php?username=<?php echo $username ?>&club_id=<?php echo $row['Club_Id']?>" class="link-details" title="Discussion Forum"><i class="ion ion-eye"></i></a>



          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/njack.jpg" class="img-fluid" alt="">
                <!-- <a href="img/portfolio/njack.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a> -->
                <a href="discussion.php?username=<?php echo $username ?>&club_id=<?php echo $row['Club_Id']?>&check=2" class="link-preview" title="Discussion Forum"><i class="ion ion-eye"></i></a>
                <a href="followClubs.php?username=<?php echo $username ?>&club_id=<?php echo $row['Club_Id']?>&check=1" class="link-details" title="Unfollow"><i class="ion ion-android-open"></i></a>

              </figure>

              <div class="portfolio-info">
                <h4><a href="#"><?php echo $row['CName']; ?></a></h4>
                <p><?php echo $row['Description']; ?></p>
              </div>
            </div>
          </div>
        <?php } ?>


        </div>
      </div>
    </section>



    <!--==========================
      portfolio2
    ============================-->

    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">More Clubs</h3>
        </header>

        <!-- <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Academics</li>
              <li data-filter=".filter-card">Sports</li>
              <li data-filter=".filter-web">Cultural</li>
            </ul>
          </div>
        </div> -->
        <div class="row portfolio-container">
        <?php

        $stmt="select * from clubs where club_id not in(select club_id from followings where user_id ='$username');";
        $result =mysqli_query($conn,$stmt);

        while($row=mysqli_fetch_assoc($result))
        {
         ?>




          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/sparkonics.png" class="img-fluid" alt="">
                <a href="img/portfolio/sparkonics.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="followClubs.php?username=<?php echo $username ?>&club_id=<?php echo $row['Club_Id']?>&check=2" class="link-details" title="Follow"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#"><?php echo $row['CName']; ?></a></h4>
                <p><?php echo $row['Description']."".mysqli_num_rows($result); ?></p>
              </div>
            </div>
          </div>
        <?php } ?>


        </div>
      </div>
    </section>






















    <!--==========================
      Team Section
    ============================-->

    <!--==========================
      Contact Section
    ============================-->


  </main>

        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
