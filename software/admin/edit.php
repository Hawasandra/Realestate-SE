<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $username=$_POST['username'];
    $email=$_POST['email'];
    $first_name=$_POST['first_name'];  
    $last_name=$_POST['last_name'];  
    $current_area=$_POST['current_area'];    
    
    // checking empty fields
    if(empty($username) || empty($email) || empty($first_name) || empty($last_name) || empty($current_area)) {            
        if(empty($username)) {
            echo "<font color='red'>Username is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email is empty.</font><br/>";
        }
        
        if(empty($first_name)) {
            echo "<font color='red'>First name field is empty.</font><br/>";
        } 
        if(empty($last_name)) {
            echo "<font color='red'>Last name field is empty.</font><br/>";
        }
         if(empty($current_area)) {
            echo "<font color='red'>current residential area field is empty.</font><br/>";
        }     
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE users SET username='$username',email='$email',first_name='$first_name',last_name='$last_name',current_area='$current_area' WHERE id=$id");
        
        //redirecting to the display page. In our case, it is admin.php
        header("Location: admin.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $username = $res['username'];
    $email = $res['email'];
    $first_name = $res['first_name'];
    $last_name = $res['last_name'];
    $current_area = $res['current_area'];

}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="admin.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Userame</td>
                <td><input type="text" name="username" value="<?php echo $username;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr> 
                <td>First Name</td>
                <td><input type="text" name="country" value="<?php echo $first_name;?>"></td>
            </tr>
            <tr> 
                <td>Last Name</td>
                <td><input type="text" name="last_name" value="<?php echo $last_name;?>"></td>
            </tr>
                        <tr> 
                <td>Current residential area</td>
                <td><input type="text" name="last_name" value="<?php echo $current_area;?>"></td>
            </tr>

            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>