--<?php
//include auth.php file on all secure pages
require('config.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: white;
}

.topnav a {
  border-right:1px solid brown;
  float: right;
  color: #373737;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  border-bottom: 3px solid transparent;
}

.topnav a:hover {
  border-bottom: 3px solid red;
}

.topnav a.active {
  border-bottom: 3px solid red;
}
.button1 {
  background-color: #4CAF50; /* Green */
  border-radius:12px;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid brown;
}

.button1:hover {
  background-color: brown;
  color: white;
}
.button2 {
  background-color: brown; /* Green */
  border-radius:12px;
  color: white;
  position: absolute;
  top: 49%;
  left: 51%;
  transform: translate(-50%, -50%);
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2 {
  background-color: brown; 
  color: white; 
  border: 2px brown;
}

.button2:hover {
  background-color:#1E90FF;
  color: white;
}
button[type='submit']{
     padding: 10px 25px 8px;
     color: #fff;
     background-color: #B5651D;
     text-shadow: rgba(0,0,0,0.24) 0 1px 0;
     font-size: 16px;
     box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0;
     border: 1px;
     border-radius: 2px;
     margin-top: 10px;
     cursor:pointer;
     }
     
.float{
  position:fixed;
  width:60px;
  height:60px;
  bottom:40px;
  right:40px;
  background-color:#25d366;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  font-size:30px;
  box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
  margin-top:16px;
}
.fa {
  border-radius:12px;
  padding: 20px;
  font-size: 30px;
  width: 100px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
.fa:hover {
    opacity: 0.7;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}
.container {
  position: relative;
  text-align: center;
  color: white;
 
}
.centered {
  position: absolute;
  top: 28%;
  left: 52%;
  transform: translate(-50%, -50%);
}
img{
  border-radius:  0 0 80px 30px;;
}
p{
   position: absolute;
  top: 35%;
  left:54%;
  transform: translate(-70%, -70%);
}
</style>
</head>
<body bgcolor="#373737">
  <h1 style="font-family:calibri;color:#B22222;">Welcome <?php echo $_SESSION['username'];?>!</h1>
  <br>
<div class="topnav">
  <a href="" style="float: left; color: brown"><i class="fa fa-home"></i>Casa Homes</a>
  <button class="button button1" style="float: right" onclick="window.location.href = 'registration.php';">Book now</button>
  <a  href="gallery.html"  style="float: left;" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-blue w3-hover-text-blue"><i class="fa fa-camera"></i> Gallery</a>
  <a href="about.html"  style="float: left;" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-blue w3-hover-text-blue"><i class="fa fa-envelope"></i> About us</a>
</div>
<table>
<div class="container">
  <img src="m.jpeg" alt="Snow" style="width:1265px; height: 605px;">
  <div class="centered"><h1 style="font-size: 60px">Looking for a Home.</h1></div>
    <p><small style="font-size: 20px">we make it happen</small></p>
 <button class="button button2" onclick="window.location.href = 'homes.php';">Find Your Home</button>
</div>

</table>

<br><br><br><h3 align="center" style="color: white">Help us the spread the word and share</h3>       
<table align="center">
<tr>
    <td><a href="#" class="fa fa-facebook"></a></td>
     <td><a href="#" class="fa fa-youtube"></a></td>
    <td><a href="#" class="fa fa-instagram"></a></td>
    <td><a href="#" class="fa fa-twitter"></a></td>
  </tr>
</table>

<form method="get" action="logout.php"><button type="submit">Logout</button></form>

</body>
</html>
