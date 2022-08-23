<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location:login.php"); 
}
?>
<!DOCTYPE html>
<html>
<body>
<h1> THIS IS SERVICES PAGE </h1> 
<a href="../view/dashboard.php"> <input name="homepage" type="submit" value="HOME PAGE"> </a>
<br>
<br>
</body>
</html>