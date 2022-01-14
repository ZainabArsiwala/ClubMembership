<?php

include("connection.php");
error_reporting(0);

// To Display username
session_start();
if(!isset($_SESSION['uname']))
{
    header('location:AdminLogin.php');
}

//To connect with Table
if(isset($_POST['submit'])){

    //User fields
    $fname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $plan = mysqli_real_escape_string($conn, $_POST['plan_name']);
    $club = mysqli_real_escape_string($conn, $_POST['Sport']);


  //insertion
  $insertquery = "INSERT INTO MEMBER (M_NAME, M_PHONE, M_ADDRESS, M_EMAIL, GENDER, PLAN, CLUB) VALUES ('$fname','$phone','$address','$email','$gender','$plan','$club')";
  $iquery = mysqli_query($conn,$insertquery);



  if($iquery)
      {
       header('location:UserINDEX.php');
     }
      else
      {?>
        <script>
                alert("Connection failed!");
        </script>
      <?php
      }



    
    //plans
    $planA = mysqli_real_escape_string($conn, $_POST['planA']);
    $planB = mysqli_real_escape_string($conn, $_POST['planB']);
    $planC = mysqli_real_escape_string($conn, $_POST['planC']);
    $planD = mysqli_real_escape_string($conn, $_POST['planD']);

    //Clubs
    $Gym = mysqli_real_escape_string($conn, $_POST['Gym']);
    $Swimming = mysqli_real_escape_string($conn, $_POST['Swimming']);      
    $Zumba = mysqli_real_escape_string($conn, $_POST['Zumba']);
    $Yoga = mysqli_real_escape_string($conn, $_POST['Yoga']);
    $Snooker = mysqli_real_escape_string($conn, $_POST['Snooker']);
    $Badminton = mysqli_real_escape_string($conn, $_POST['Badminton']);
    $Tennis = mysqli_real_escape_string($conn, $_POST['Tennis']);
    $Table_Tennis = mysqli_real_escape_string($conn, $_POST['Table_Tennis']);
    $Chess = mysqli_real_escape_string($conn, $_POST['Chess']);
    $Carrom = mysqli_real_escape_string($conn, $_POST['Carrom']);

   
    
  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UNWIND</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon"> <!--======Change LOGO======-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Font awesome Link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/Displaytest.css">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="EnrollUser.php">UNWIND<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="UserINDEX.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#" class="get-started-btn scrollto"><?php echo "HI, ".$_SESSION['uname'];?></a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>New Member</h2>
          <ol>
            <li><a href="UserINDEX.php">Home</a></li>
            <li>New Member</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="site-main">
        <div class="container">

        <!--    
        <div class="box-nav d-flex justify-between">
                <div class="filter">
                    <a href="INDEX.php"><i
                            class="fas fa-angle-double-left"></i> Users</a>
                </div>

            </div>
            -->
            <div class="form-title text-center">
                <h2 class="text-dark">New Member</h2>
                <span class="text_light">Use the below form to enroll in a club.</span>
            </div>

            <form action="" method="POST" id="add_user">

                <div class="new_user">
                    <div class="form-group">
                        <label for="name" class="text_light">Name</label>
                        <input type="hidden" name="id" value="">
                        <input type="text" name="fullname" value="" placeholder="Mark Stoenis">
                    </div>
                    <div class="form-group">
                        <label for="Phone" class="text_light">Phone</label>
                        <input type="text" name="phone" value="" placeholder="12300 12300">
                    </div>
                    <div class="form-group">
                        <label for="Phone" class="text_light">Address</label>
                        <input type="text" name="address" value="" placeholder="Flat, Building, Street, city, etc.">
                    </div>
                    <div class="form-group">
                        <label for="Email" class="text_light">Email</label>
                        <input type="text" name="email" value="" placeholder="example@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="gender" class="text_light">Gender</label>
                        <div class="radio inline">
                            <input type="radio" id="radio-2" name="gender" value="Male">
                            <label for="radio-2" class="radio-label">Male</label>
                        </div>
                        <div class="radio inline">
                            <input type="radio" id="radio-3" name="gender" value="Female">
                            <label for="radio-3" class="radio-label">Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Plan" class="text_light">Choose a Plan:</label>
                        <select name="plan_name" id="Plan" class="select">
                            <option selected>No Plan Selected</option>
                            <option value="Plan A" >Plan A</option>
                            <option value="Plan B" >Plan B</option>
                            <option value="Plan C" >Plan C</option>
                            <option value="Plan D" >Plan D</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Sport" class="text_light">Choose a Sport's club:</label>
                        <select name="Sport" id="Sport" class="select">
                            <option selected>No Club Selected</option>
                            <option value="Gym"          name="Gym">Gym</option>   
                            <option value="Swimming"     name="Swimming">Swimming</option> 
                            <option value="Zumba"        name="Zumba">Zumba</option>
                            <option value="Yoga"         name="Yoga">Yoga</option>
                            <option value="Snooker"      name="Snooker">Snooker</option>
                            <option value="Badminton"    name="Badminton">Badminton</option>
                            <option value="Tennis"       name="planD">Tennis</option>
                            <option value="Table Tennis" name="Table_Tennis">Table Tennis</option>
                            <option value="Chess"        name="Chess">Chess</option>
                            <option value="Carrom"       name="Carrom">Carrom</option>
                        </select>
                    </div>


                  <!--
                    <div class="form-group">
                        <label for="Installment" class="text_light">Installment 1:</label>
                        <input type="text" name="Installment" value="" placeholder="Enter Amount">
                    </div>
                    <div class="form-group">
                        <label for="Installment" class="text_light">Installment 2:</label>
                        <input type="text" name="Installment" value="" placeholder="Enter Amount">
                    </div>
                    <div class="form-group">
                        <label for="Installment" class="text_light">Installment 3:</label>
                        <input type="text" name="Installment" value="" placeholder="Enter Amount">
                    </div>
-->
                    <!--<div class="total">
                        <h2>Total Amount: </h2> 
                        <h4>100$</h4> 
                    </div>-->

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn text-dark update">Save</button>
                    </div>

                </div>
            </form>

        </div>
      </section> 
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>UNWIND<span>.</span></h3>
              <p>
                91A Gandhi Street <br>
                Thane(w) 400601, INDIA<br><br>
                <strong>Phone:</strong> +022 8881212<br>
                <strong>Email:</strong> unwind@gmail.com<br>
              </p>
              <div class="social-links mt-3">
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <!--<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>-->
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sports & Games</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tournaments</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Conference room</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Banquet hall</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Club get togethers</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Mission</h4>
            <p>The club boasts of facilities that are maintained to match international standards offering you to spend quality time with your family. <br><br>
              Besides what's the point of working so hard to earn a living if you can't enjoy those little moments in life with your loved ones.</p>
            <!--
            <form action="" method="post">
               <input type="email" name="email">
              <input type="submit" id="submit" name="submit" value="Subscribe">
            </form> -->


          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>UNWIND</span></strong>. 
      </div>
      <div class="credits">
        Designed with  &heartsuit; by <a href="#" > SAMEER & ZAINAB.</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>


  <!--font awesome js link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>