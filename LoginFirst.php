<style>
*{
  box-sizing: border-box;
}
body{
  height: 100%;
  margin: 0;
  padding: 0;
  font-family: "Raleway", sans-serif;
}
.heroimg{
  background-image: url(assets/img/myHero.jpg);
  height: 100vh;
  width: 100%;
  filter: blur(5px);
  background-size: cover;
  background-repeat: no-repeat;
  -webkit-background-size:cover;
  background-position: center center;

}

.card{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 35%;
  height: 30%;
  padding: 40px 0;
  border-radius: 2rem;
  text-align: center;
  background-color: rgb(255, 209, 81);
  color: #000;
}

h1{
  color: rgb(0, 0, 0);
  font-family: "Raleway", sans-serif;
  margin-top: -15px;
  font-weight: bold;
  margin-bottom: 2.5rem;
}

p{
  font-family: "Raleway", sans-serif;
  font-size: 20px;
  text-align: center;
  font-weight: 600;
  margin-bottom: 25px;
}

a{
  padding: .8rem 2.5rem;
    border: none;
    border-radius: 3rem;
    color: rgb(73, 73, 73);
    
    background: #ffffff;
    font-size: 1rem;
    font-weight: 600;
    letter-spacing: 0.1rem;
    outline: none;
    cursor: pointer;
    transition: all 0.4s ease;
    margin-top: 10px;
    text-decoration: none;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login First</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Font awesome Link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
  <div class="hero">
    <div class="heroimg"></div>
    <div class="card">
      <h1>UNWIND</h1>
      <div class="icon"><i class="fas fa-user"></i></div>
      <p>To view this content, please login first.</p>
      <a href="UserSignup.php">Login</a>

  </div>
  </div>
</body>
</html>