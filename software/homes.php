--<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  html{
   background-color:##F5FFFA;
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
h3{
  font-family: Comic Sans MS;
}
.topnav a:hover {
  border-bottom: 3px solid red;
}

.topnav a.active {
  border-bottom: 3px solid red;
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
  width: 80%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}
.button2 {
  background-color: brown; /* Green */
  border-radius:12px;
  color: white;
  position: absolute;
  top: 20%;
  left: 50%;
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
.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: brown;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
  font-family: Comic Sans MS;
}
</style>
</head>
<body>
  <h1 style="font-family:calibri;color:#B22222;">Welcome <?php echo $_SESSION['username'];?>!</h1>
  <div class="topnav">
  <a href="dashboard.php" style="float: left; color: brown"><i class="fa fa-home"></i>Casa Homes</a>
  <a  href="gallery.html"  style="float: left;" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-blue w3-hover-text-blue"><i class="fa fa-camera"></i> Gallery</a>
  <a href="about.html"  style="float: left;" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-blue w3-hover-text-blue"><i class="fa fa-envelope"></i> About us</a>
</div>
</script>
<table>
  <tr>
  <td>
  <div class="container">
  <img src="one.png" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
  <button class="button button2" onclick="myFunction()">Book Now</button>
  </div>
   <h3>House no. 101</h3>
</div>

</td>
<td>
<div class="container">
  <img src="one.png" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
  <button class="button button2" onclick="myFunction()">Book Now</button>
  </div>
   <h3>House no. 102</h3>
</div>
</td>
<td>
<div class="container">
  <img src="one.png" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
  <button class="button button2" onclick="myFunction()">Book Now</button>
  </div>
   <h3>House no. 103</h3>
</div>
</td>
<td>
<div class="container">
  <img src="one.png" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
  <button class="button button2" onclick="myFunction()">Book Now</button>
  </div>
   <h3>House no. 104</h3>
</div>
</td>
</tr>
</table>
<script>
function myFunction() {
  alert("BOOKED SUCCESSFULLY!");
}
</script>

<br><br><br><h3 align="center" style="color: black"><b>Help us the spread the word and share</b></h3>       
<table align="center">
<tr>
    <td><a href="#" class="fa fa-facebook"></a></td>
     <td><a href="#" class="fa fa-youtube"></a></td>
    <td><a href="#" class="fa fa-instagram"></a></td>
    <td><a href="#" class="fa fa-twitter"></a></td>
  </tr>
</table>

</body>
</html>