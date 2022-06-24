<?php
$uname="";
$err_uname=" ";
$pass="";
$err_pass="";



if($_SERVER["REQUEST_METHOD"]=="POST"){
//if(isset($_POST["submit"])){
if(empty($_POST["uname"])){
$err_uname="Username Required";
}
elseif(strlen($_POST["uname"])<2)
{
$err_uname="Username must be contains 2 charachters";
}

elseif (!preg_match("/^[a-zA-Z0-9_]+$/",$_POST["uname"])) {
$err_uname = "Only letters and white space allowed";
}

else{
$uname=$_POST["uname"];
}

if(empty($_POST["pass"])){
$err_pass="Password Required";
}
elseif(strlen($_POST["pass"])<8)
{
$err_pass="Password not less than 8 charachters";
}

elseif(!preg_match("/\W/", $_POST["pass"]))
{
$err_pass="Password should contain at least one special character";
}
else{
$pass=$_POST["pass"];
}


}
?>

<html>
<head></head>
<body>
<h1>Login Page</h1>
<form action="" method="POST">
<table>
<tr>
<td><span >Username</span></td>
<td>:<input type="text" name="uname" value="<?php echo $uname;?>" placeholder = "Username " >
<span><?php echo $err_uname;?></span></td>
</tr>
<tr>
<td><span>Password</span></td>
<td>:<input type="password" name="pass" value="<?php echo $pass;?>" placeholder = "Password " >
<span><?php echo $err_pass;?></span></td>
</tr>
<tr>
<td><input type="checkbox" name="" value="Movies"><span>Remember Me</span></td>


</tr>

</table>
<br>
<input type="submit" name="submit" value="submit">
</form>
</body>