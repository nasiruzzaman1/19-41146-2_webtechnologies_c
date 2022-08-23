<?php
include('../control/signupControl.php');

if(isset($_SESSION['username'])){
header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Sign Up</h1>

 <form action="" method="post"> 

 <br>   
 Full Name: <input type="text" name="name" placeholder="Enter your name" > <?php echo $errorName; ?> <br>
 <br>   
 User Name: <input type="text" name="username" placeholder="Enter your username" onkeyup="MyAjaxFunc()" > <?php echo $errorUserName; ?> <p id="message"> </p> <br>
    Email:<input type="text" name="email" placeholder="Enter your email"> <?php echo $errorEmail; ?> <br>
    <br>
    Contact No:<input type="text" name="contact" placeholder="Enter your contact no" > <?php echo $errorContact; ?> <br>
    <br>
    Password: <input type="password" name="password" placeholder="Enter your password"> <?php echo $errorPass; ?> <br>
    <br> <br>
    Insert Document: <input type="file" name="filetoupload"> <?php echo $errorFile; ?>
    <br> <br>
    <input name="submit" type="submit" id="green" value="SIGN UP">
    <br><br>
</form>

<?php echo $error; ?> <br>
<?php echo $error1; ?> <br>

<a href="login.php"> <input name="login" type="submit" id="green" value="LOG IN"> </a>
</div>
</body>
</html>