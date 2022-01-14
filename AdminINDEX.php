<?php
//require_once("operation.php");
include("connection.php");

session_start();
error_reporting(0);

if(!isset($_SESSION['uname']))
{
    header('location:AdminLogin.php');
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
  <link href="#" rel="apple-touch-icon">

  <!-- Font awesome Link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet"> 
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="AdminINDEX.php">UNWIND<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!--<a href="index.html" class="logo"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="AdminINDEX.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="/"></a></li>
          <li><a href="DisplayUser.php">Display User</a></li>
          <li><a href="AdminLogout.php">Logout</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="AdminINDEX.php" class="get-started-btn scrollto"><?php echo "HI, ".$_SESSION['uname'];?></a>

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>UNWIND<span>.</span></h1>
          <h2>A relaxing place to indulge in.</h2>
        </div>
      </div>

      <div class="row mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4 col-6">
          <div class="icon-box">
            <i class="icofont-holding-hands"></i>
            <h3><a href="">Great Service</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 ">
          <div class="icon-box">
            <i class="icofont-clock-time"></i>
            <h3><a href="">Open <br> 24/7</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-md-0">
          <div class="icon-box">
          <i class="icofont-badge"></i>
            <h3><a href="">No.1 Awarded</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
          <div class="icon-box">
          <i class="icofont-result-sport"></i>
            <h3><a href="">Various Sports</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
          <div class="icon-box">
          <i class="icofont-sale-discount"></i>
            <h3><a href="">Best <br> Deals</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>UNWIND: Attach to life with a little detachment.</h3>
            <p class="font-italic">
              An organizational group named 'UNWIND' helps thousands of it's client to better their lifestyle with the little 
              help of various sports and games.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Awarded as no. 1 club in Thane, Mumbai.</li>
              <li><i class="ri-check-double-line"></i> Multispeciality club with wide range of sports & games.</li>
              <li><i class="ri-check-double-line"></i> Our leadership works together to ensure customer satisfaction by combining premium experience with experienced management and well trained staff.</li>
            </ul>
            <p>
            The club boasts of facilities that are maintained to match international standards offering you to spend quality time with your family.
            Besides what's the point of working so hard to earn a living if you can't enjoy those little moments in life with your loved ones. 
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    
    <!-- ======= Features Section ======= -->
    <section id="features" class="features"> 
      <div class="container" data-aos="fade-up"> 
      <div class="row">
          <div class="image col-lg-6" style='background-image: url("assets/img/features1.jpg");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
            <i class="icofont-award"></i>
            <h4>No. 1 club in Thane.</h4>
              <p>Unwind has awarded by no. 1 club of Thane in 2021 by the society of 'New Way of Lifestyle'.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="icofont-clock-time"></i>
              <h4>Open 24/7 at your service</h4>
              <p>Unwind never sleeps. To provide high quality service for it's members, Unwind is open 24/7.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="icofont-result-sport"></i>
              <h4>Wide range of sports</h4>
              <p>Unwind provides wide range of sports and games to it's members to choose within.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="icofont-people"></i>
             <h4>Well trained staff</h4>
              <p>Unwind has well trained staff to help you change your life and provide services.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="icofont-swimmer"></i></div>
              <h4><a href="">Swimming</a></h4>
              <p>A mini Olympic size swimming pool with 25 mtr length and a depth as 3.5 ft, 4.5 ft, 7.5 ft; </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="icofont-gym-alt-2"></i></div>
              <h4><a href="">Gym</a></h4>
              <p>The fully equipped with a wide range of cardiovascular & weight training equipments.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="icofont-female"></i></div>
              <h4><a href="">Zumba</a></h4>
              <p>A large hall with certified trainer and special batches for Zaumba.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="icofont-billiard-ball"></i></div>
              <h4><a href="">Snooker</a></h4>
              <p>Fully equipped snooker tables with all required accesories.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="icofont-flora"></i></div>
              <h4><a href="yogaAdmin.php">Yoga</a></h4>
              <p>A large hall with certified trainer and special batches for Yoga.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="icofont-badminton-birdie"></i></div>
              <h4><a href="">Badminton</a></h4>
              <p>Two specialized badminton courts for players with certified coaches.</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="icofont-tennis"></i></div>
              <h4><a href="">Tennis</a></h4>
              <p>Two specialized tennis courts for players with certified coaches.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="icofont-table-tennis"></i></div>
              <h4><a href="">Table Tennis</a></h4>
              <p>Fully equipped tables with all required accesories for Table Tennis.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-chess"></i></div>
              <h4><a href="">Chess</a></h4>
              <p>A special garden side area with nice ambience for chess players.</p>
            </div>
          </div>

        </div>

        <div class="card_center">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="icofont-brand-tata-indicom"></i></i></div>
              <h4><a href="">Carrom</a></h4>
              <p>A special garden side area with nice ambiencefor carrom players.</p>
            </div>
          </div>
        </div>
        

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Enroll Today</h3>
          <p>Grab the opportunity to shape up your life. Enroll today and be a part of UNWIND's family.</p>
          <p>So what are you waiting for?</p>
          <a class="cta-btn" href="NewUser.php">Enroll</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Check our Portfolio</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/imgee/Sport-Carrom.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Carrom</h4>
                <div class="portfolio-links">
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/imgee/Sport-Yoga.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Yoga</h4>
                <div class="portfolio-links">
                  <a href="yogaAdmin.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/imgee/Sport-Chess.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Chess</h4>
                <div class="portfolio-links">
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/imgee/Sport-Badminton.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Badminton</h4>
                <div class="portfolio-links">
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/imgee/Sport-Gym.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Gym</h4>
                <div class="portfolio-links">
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/imgee/Sport-Running.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Running</h4>
                <div class="portfolio-links">
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/imgee/Sport-Gym2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Gym</h4>
                <div class="portfolio-links">
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/imgee/Sport-Tennis.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tennis</h4>
                <div class="portfolio-links">
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/imgee/Sport-Zumba.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Zumba</h4>
                <div class="portfolio-links">
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/imgee/Sport-Swimming.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Swimming</h4>
                <div class="portfolio-links">
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/imgee/Sport-Snooker.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Snooker</h4>
                <div class="portfolio-links">
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/imgee/Sport-Table_Tennis.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Table Tennis</h4>
                <div class="portfolio-links">
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/imgee/Sport-Workout.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Workout</h4>
                <div class="portfolio-links">
                  <a href="" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

      <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>The journey of UNWIND</h3>
              <p>
              Since Jan, 2017 an organizational group named 'UNWIND' helps thousands of it's client to better their lifestyle with the little 
              help of various sports and games.
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-simple-smile"></i>
                    <span data-toggle="counter-up">5000</span>
                    <p><strong>Happy Clients</strong> since the Jan, 2017. And serving more member with a pleasure and love.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                  <i class="icofont-result-sport"></i>
                    <span data-toggle="counter-up">8</span>
                    <p><strong>Tournaments</strong> held to boost enthusiasm of our members as well as youth in the country.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-clock-time"></i>
                    <span data-toggle="counter-up">5</span>
                    <p><strong>Years of experience</strong> in changing lifestyles of people and promoting sports culture in namtion.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-award"></i>
                    <span data-toggle="counter-up">6</span>
                    <p><strong>Awards</strong> for the best club and many more.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Rushi Patil</h3>
            <h4>Member</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              It has been awesome to me. Their trainers are exceptional, the overall vibe is great and I have had nothing but good experiences. I definitely recommend them to my friends and family.              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Megha Pai</h3>
            <h4>Member</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Hands down, best choice I’ve made training at UNWIND. VERY friendly team who make me actually want to go train. I look forward to walking through the doors and always feel amazing when I leave.              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Shereena Sunny</h3>
            <h4>Member</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              One the best studios in the city. Expertly developed UNWIND workouts, guided by top industry professionals in a state-of-the-art facility              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Aditya Talekar</h3>
            <h4>Member</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Results are amazing. Community feels really good. Classes and platforms are creative and constantly changing and evolving. The coaches really care about being there for us.              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>Vaishnav Pande</h3>
            <h4>Member</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              My experience with UNWIND has been and continues to be perfect. Convenience at its finest.              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/zainab.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Zainab Arsiwala</h4>
                <span>Backend Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/sameer.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sameer Kshirsagar</h4>
                <span>Web Designer</span>
              </div>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>91A Gandhi Street, Thane(w) 400601, INDIA</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>unwind@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+022 8881212</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div> -->

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