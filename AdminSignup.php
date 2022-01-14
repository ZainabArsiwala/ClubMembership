<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNWIND-SignUp</title>

    <!-- Font Icon -->
    <link href="assets/img/logo.png" rel="icon"> <!--======Change LOGO======-->

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/Signup.css">
</head>

<?php

include("connection.php");
error_reporting(1);

if(isset($_POST['submit'])){
  
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpass']);

   // $encpass = password_hash($pass, PASSWORD_BCRYPT);
   // $enccpass = password_hash($cpass, PASSWORD_BCRYPT);

    $usernamequery = "SELECT * FROM ADMINSIGNUP WHERE AD_USERNAME= '$uname'";
    $uquery = mysqli_query($conn, $usernamequery);
    $usercount = mysqli_num_rows($uquery);


    $emailquery = "SELECT * FROM ADMINSIGNUP WHERE AD_EMAIL= '$email'";
    $equery = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($equery);
    
  
    if($emailcount>0)
    {
      ?>
        <script>
            alert("Email already exist!");
        </script>
      <?php
    }
    elseif($usercount>0)
    {
      ?>
        <script>
            alert("Usernme already exist!");
        </script>
      <?php
    }
    else
    {
      if($pass === $cpass)
      {
        $insertquery = "INSERT INTO ADMINSIGNUP (ADMIN_NAME, AD_EMAIL, AD_USERNAME, AD_PASSWORD, C_AD_PASSWORD) VALUES ('$fname','$email','$uname','$pass','$cpass')";
        $iquery = mysqli_query($conn,$insertquery);

        if($iquery)
        {
          header('location:AdminLogin.php');
        }
        else
        {?>
           <script>
                  alert("Connection failed!");
          </script>
          <?php
        }
      }
      else
      {
        ?>
           <script>
                  alert("password does not match.");
          </script>
          <?php
      }
    }
  

  
}
?>


<body>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>

                        <form method="POST" action="" class="register-form" id="register-form">

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="fname" id="fname" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Username"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="cpass" id="cpass" placeholder="Repeat your password"/>
                            </div>
                            <!--<div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>-->
                            <div class="form-group form-button">
                                <input type="submit" id="submit" name="submit" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="assets/img/signup-image.jpg" alt="sing up image"></figure>
                        <a href="AdminLogin.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>