<?php
include("connection.php");
error_reporting(0);

//To Display username
session_start();
if(!isset($_SESSION['uname']))
{
    header('location:AdminLogin.php');
}

//To display user data
$selectquery ="select * from member";
$query=mysqli_query($conn, $selectquery);

//To use search function
if( isset($_GET['search']) ){
  $mid = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
  $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
  $plans = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
  $clubs = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
  $phone = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
  $memail = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));

  $sql = "SELECT * FROM MEMBER WHERE MEMB_ID = '$mid' OR M_NAME ='$name' OR PLAN ='$plans' OR CLUB ='$clubs' OR M_PHONE ='$phone' OR M_EMAIL ='$memail'";
}
$result1 = mysqli_query($conn,$sql);

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

      <h1 class="logo"><a href="DisplayUser.php">UNWIND<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="AdminINDEX.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn scrollto"><?php echo "HI, ".$_SESSION['uname'];?></a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Display User</h2>
          <ol>
            <li><a href="AdminINDEX.php">Home</a></li>
            <li>Display User</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <main id="site-main">
            
                <!--
                <div class="select_plan">
                    <label for="Plan" class="text_light">Choose a Plan:</label>
                    <select name="Plan" id="plan1">
                        
                        <option selected>No Plan Selected</option>
                        <option value="">Plan A</option>
                        <option value="">Plan B</option>
                        <option value="">Plan C</option>
                        <option value="">Plan D</option>
                    </select>
                </div>

                <div class="select_plan">
                    <label for="Plan" class="text_light">Choose a Sport's club:</label>
                        <select name="Plan" id="plan2">
                            <option selected>No Club Selected</option>
                            <option value="Gym">Gym</option>
                            <option value="Swimming">Swimming</option>
                            <option value="Zumba">Zumba</option>
                            <option value="Yoga">Yoga</option>
                            <option value="Snooker">Snooker</option>
                            <option value="Badminton">Badminton</option>
                            <option value="Tennis">Tennis</option>
                            <option value="Table_Tennis">Table Tennis</option>
                            <option value="Chess">Chess</option>
                            <option value="Carrom">Carrom</option>
                            
                        </select>                    
                </div>-->

                <form action="">
                <div class="container">
                <div class="box-nav d-flex justify-between">
                 <a href="NewUser.php" class="border-shadow">
                    <span class="text-gradient">New User <i class="fa fa-user" aria-hidden="true"></i></span>
                </a>
                

                    <input type="text" placeholder="  Type the name here" name="search" style=width:20rem; >
                    <input type="submit" value="Display User" name="btn" class="btn btn-sm btn-primary" style=width:10rem; >

                </div>
                

            
            </form>
            <!--form-handeling-->
            <form action="/" method="POST">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Club</th>
                        <th>Plan</th>
                        <th>Action</th>  

                    </tr>
                </thead>
                
                <tbody>
                    <?php
                      while($row = $result1->fetch_assoc()){
                    ?>
                      <tr>
                        <td><?php echo $row['MEMB_ID']; ?></td>
                        <td><?php echo $row['M_NAME']; ?></td>
                        <td><?php echo $row['M_EMAIL']; ?></td>
                        <td><?php echo $row['M_PHONE']; ?></td>
                        <td><?php echo $row['M_ADDRESS']; ?></td>
                        <td><?php echo $row['PLAN']; ?></td>
                        <td><?php echo $row['CLUB']; ?></td>  
                      </tr>
                    <?php
                      }
                    ?>
                  <!-------------------------------------------------->
                <?php
                    while($result = mysqli_fetch_assoc($query))
                    {
                ?>
                
                    <tr> 
                        
                        <th><?php echo $result["MEMB_ID"]; ?></th>
                        <th><?php echo $result["M_NAME"]; ?></th>
                        <th><?php echo $result["M_EMAIL"]; ?></th>
                        <th><?php echo $result["M_PHONE"]; ?></th>
                        <th><?php echo $result["M_ADDRESS"]; ?></th>
                        <th><?php echo $result["CLUB"]; ?></th>
                        <th><?php echo $result["PLAN"]; ?></th>
                        
                        <th>
                            <a  class="btn border-shadow update" href="UpdateUser.php?id=<?php echo $result["MEMB_ID"]; ?>">
                                <span class="text-gradient"><i class="fas fa-pencil-alt"></i></span>
                            </a>

                            <a class="btn border-shadow delete" href="DeleteUser.php?id=<?php echo $result["MEMB_ID"]; ?>">
                                <span class="text-gradient"><i class="fas fa-times"></i></span>
                            </a>
                            
                        </th>
                        
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </form>
          
            <!--/form-handeling-->
        </div>
    </main>
    

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
            <h4>Our mission</h4>
            <p>The club boasts of facilities that are maintained to match international standards offering you to spend quality time with your family. <br><br>
              Besides what's the point of working so hard to earn a living if you can't enjoy those little moments in life with your loved ones.</p>
            <!--
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>-->

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