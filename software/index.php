--<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
<style type="text/css">
	h1{
		 width: 300px;
     margin: 0 auto;
	}
h3{
	width: 300px;
     margin: 0 auto;
    
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
button[type='submit']:hover {
     background-color:#B5651D;
	
</style>
</head>
<body>
<div class="form">
<h1 style="font-family:calibri;color:#B22222;">Welcome <?php echo $_SESSION['username'];?>!</h1>


<form method="get" action="logout.php"><button type="submit">Logout</button></form>
</div>
</body>
</html>