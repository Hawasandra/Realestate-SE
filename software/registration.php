<?php
//include auth.php file on all secure pages
require include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
<style type="text/css">
    html{
         background:url(p.jpeg) no-repeat;
         background-size: cover;
}
       

    
	body {
     font-family:Arial, Sans-Serif;
}
.clearfix:before, .clearfix:after{
     content: "";
     display: table;
}
.clearfix:after{
     clear: both;
}
a{
     color:#0067ab;
     text-decoration:none;
}
a:hover{
     text-decoration:underline;
}
.form{
     width: 300px;
     margin: 0 auto;
}
input[type='text'], input[type='email'],
input[type='password'] {
     width: 200px;
     border-radius: 2px;
     border: 1px solid #CCC;
     padding: 10px;
     color: #333;
     font-size: 14px;
     margin-top: 10px;
}
input[type='submit']{
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
input[type='submit']:hover {
     background-color:#B5651D;
}   
input[type='reset']{
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
input[type='reset']:hover {
     background-color:#B5651D;
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
</style>
</head>
<body>
<?php
require_once"config.php";
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($link,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($link,$email);  
 $first_name=stripslashes($_REQUEST['first_name']);
 $first_name=mysqli_real_escape_string($link,$first_name);
 $last_name=stripslashes($_REQUEST['last_name']);
 $last_name=mysqli_real_escape_string($link,$last_name);
 $current_area=stripslashes($_REQUEST['current_area']);
 $current_area=mysqli_real_escape_string($link,$current_area);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($link,$password);
 $trn_date = date("Y-m-d H:i:s");
        $sql = "INSERT into `users` (username, email, first_name, last_name, current_area, password, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$first_name', '$last_name', '$current_area', '$trn_date')";
        $result = mysqli_query($link,$sql);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<br>
<br>
<h1 style="font-family: calibri; color:#B5651D;">Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required /><br/>
<input type="email" name="email" placeholder="Email" required /><br>
<input type="text" name="first_name" placeholder="First Name" required /><br>
<input type="text" name="last_name" placeholder="Last Name" required /><br>
<input type="text" name="current_area" placeholder="Current residential area" required /><br>
<input type="password" name="password" placeholder="Password" required /><br/>
<input type="submit" name="submit" value="Register" />
<input type="reset" class="btn btn-default" value="Reset">
   <p style="color: white;">Already have an account? <a href="login.php" style="color: white;"><b>Login here</b></a>.</p>
</form>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=51955081075&text=Contact us for more details." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>


<?php } ?>
</body>
</html>