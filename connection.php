<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "OUTDOORSY";

$conn=mysqli_connect($servername, $username, $password);

 $sql="CREATE DATABASE IF NOT EXISTS $dbname";

 if(mysqli_query($conn, $sql)){
        $conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    //echo "Connection Successful";
}
else{
    alert("Connection Failed").mysqli_connect_error();
}

$sql="CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($conn, $sql)){
        $con=mysqli_connect($servername, $username, $password, $dbname);

        $errors = [];

$Admin = "CREATE TABLE IF NOT EXISTS ADMINSIGNUP (
    ADMIN_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ADMIN_NAME VARCHAR(25) NOT NULL,
    AD_EMAIL VARCHAR(25) NOT NULL,
    AD_USERNAME VARCHAR(25) NOT NULL,
    AD_PASSWORD VARCHAR(10) NOT NULL,
    C_AD_PASSWORD VARCHAR(10) NOT NULL
    )";

$user = "CREATE TABLE IF NOT EXISTS USERSIGNUP (
    USER_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    USER_NAME VARCHAR(25) NOT NULL,
    U_EMAIL VARCHAR(25) NOT NULL,
    U_USERNAME VARCHAR(25) NOT NULL,
    U_PASSWORD VARCHAR(10) NOT NULL,
    C_U_PASSWORD VARCHAR(10) NOT NULL
    )";

$member = "CREATE TABLE IF NOT EXISTS MEMBER(
    MEMB_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    M_NAME VARCHAR(25) NOT NULL,
    M_PHONE VARCHAR(25) NOT NULL,
    M_ADDRESS VARCHAR(25) NOT NULL,
    M_EMAIL CHAR(25) NOT NULL,
    GENDER VARCHAR(9) NOT NULL,
    PLAN VARCHAR(25) NOT NULL,
    CLUB VARCHAR(25) NOT NULL
    )";

$feedback = "CREATE TABLE IF NOT EXISTS FEEDBACK(
    F_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    F_NAME VARCHAR(25) NOT NULL,
    EMAIL VARCHAR(25) NOT NULL,
    SUBJECT VARCHAR(15) NOT NULL,
    MESSAGE VARCHAR(50) NOT NULL
    )";

$tables = [$Admin, $user, $member, $feedback];


foreach($tables as $k => $sql){
    $query = @$conn->query($sql);

    if(!$query)
       $errors[] = "Table $k : Creation failed ($conn->error)";
    
}


foreach($errors as $msg) {
   echo "$msg <br>";
}
    }
}


?>

