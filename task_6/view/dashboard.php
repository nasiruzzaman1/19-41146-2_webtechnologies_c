<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location:login.php"); 
}
else
{
    $cookie_value=$_SESSION["username"];
}
$cookie_name = "user";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<h1> WELCOME TO OUR WEBSITE , <?php echo $_COOKIE[$cookie_name]; ?></h1> 

<h2>User Dashboard</h2> <br> 
<a href="profile.php"> <input name="profile" type="submit" value=" PROFILE "> </a>
<br> <br>
<a href="services.php"> <input name="services" type="submit" value="SERVICES"> </a>
<br> <br>

<a href="../control/logout.php"> <input name="logOut" type="submit" value="LOG OUT"> </a>
<br>
<br>
</body>
</html>