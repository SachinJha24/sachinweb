<?php
$servername = "sql100.infinityfree.com";
$username = "epiz_33814377";
$pass = "RG24kB5j4ZDJ2DH";
$database = "epiz_33814377_reponsiveform";


$con = mysqli_connect($servername,$username,$pass,$database);

if($con){
    // echo "connected Successfully!";
}else echo "connected not !";
?>