--<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
<style type="text/css">
	.form{
     width: 300px;
     margin: 0 auto;
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
    .error{
        font-family: Comic Sans MS;
        color:#B22222;
    }.
</style>
</head>
<body>
<?php
require('config.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: dashboard.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>

 <div class="form">
<br>
<br>
<h1 style="font-family: calibri; color:#B5651D;">Login</h1>
<form action="check.php" method="post" name="login"><br>
<input type="text" name="username" placeholder="Username" required /><br><br>
<input type="password" name="password" placeholder="Password" required /><br><br>
<input name="submit" type="submit" value="Login" />
<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  
</form>
<p style="font-family: calibri; color:#B5651D;">Not registered yet? <a href='registration.php'style="color: black">Register Here</a></p>
</div>
<?php } ?>

</body>
</html>
<?php
    unset($_SESSION["error"]);
?>