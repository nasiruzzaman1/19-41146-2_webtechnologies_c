<?php
include('../control/loginControl.php');

if(isset($_SESSION['username']))
{
header("location: dashboard.php");
}
?>
<!DOCTYPE html>
<html>

<body> 
<h2>Login</h2>
<p id="error"></p> 
<form name="myForm" action="" method="post">
<input type="text" name="username" placeholder="Enter your username" > <?php echo $errorName; ?> <br> <br>
<input type="password" name="password" placeholder="Enter your password" > <?php echo $errorPass; ?> <br> <br>  
<input name="submit" type="submit" value="LOGIN" id="green">
</form>
<br>
<?php echo $error; ?> <br>

If you don't have a account <a href="signup.php">SignUp Here</a>
<br> <br>
</body>
</html>