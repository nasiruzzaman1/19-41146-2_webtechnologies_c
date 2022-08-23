<?php include('../control/profileControl.php'); 
?>
<!DOCTYPE html>
<html>
<body>
<h1> USER PROFILE </h1>
<form name="profile" action="" method="post">
<br>
<label> Name : </label> <input type="text" name="name" value="<?php echo $nameOfUser; ?>"> <br>
<br>
Username : <?php echo $unameOfUser; ?> <br>
<br>
Email : <input type="text" name="email" value="<?php echo $emailOfUser; ?>"> <br>
<br>
Contact : <input type="text" name="contact" value="<?php echo $contactOfUser; ?>"> <br>
<br>
Password : <input type="text" name="password" value="<?php echo $passOfUser; ?>"> <br>
<br>
<?php echo $error; ?>
<input name="update" type="submit" value="UPDATE">
<input name="delete" type="submit" value="DELETE">
<br><br>
</form>

<?php echo $errorPrf ; ?>

<br><br><br> 
<a href="../view/dashboard.php"> <input name="logOut" type="submit" value="Home Page"> </a> <br>
<a href="../control/logout.php"> <input name="logOut" type="submit" value="LOG OUT"> </a>
</body>
</html>