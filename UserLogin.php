<?php
session_start();
include("connection.php");
error_reporting(0);

if(isset($_POST['submit']))
{

  $uname = $_POST['uname'];
  $pass =$_POST['password'];

  $query = "SELECT * FROM USERSIGNUP WHERE U_USERNAME= '$uname' && U_PASSWORD ='$pass' ";
  $data = mysqli_query($conn, $query);
  $total = mysqli_num_rows($data);
  //echo $total;

  if($total == 1)
  {
    $_SESSION['uname'] = $uname;
    header('location:UserINDEX.php');
  }
  else
  {
      ?>
        <script>
            alert("Please enter correct credentials!");
        </script>
      <?php
  }

}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNWIND-Login</title>

    <!-- Font Icon -->
    <link href="assets/img/logo.png" rel="icon"> <!--======Change LOGO======-->

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/Signup.css">
    
</head>
<body>
    <div class="main">
        
         <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="assets/img/signin-image.jpg" alt="sing up image"></figure>
                        <a href="UserSignup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Log in</h2>

                        <form method="POST" class="register-form" id="login-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>"  >
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="uname" id="uname" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <!--<div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>-->
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <!--
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </div>
        </section>

    </div>

      
        <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>