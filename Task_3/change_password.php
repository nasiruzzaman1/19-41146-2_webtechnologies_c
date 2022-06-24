<!DOCTYPE html>
<html lang="en">

<head>

<style>
body {
background-color: white;
padding-left: 20px;
text-align: left;
}

.error {
color: red;
}

div {
text-align: right;

width: 420px;
padding:5px;
border: 1px solid black;
}
</style>
</head>

<body>
<?php
// define variables and set to empty values
$currentpasswordError = $newpasswordError = $confirmpasswordError = "";
$currentpassword = $newpassword = $confirmpassword = "";

$currentpassword = "abc@123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["newpassword"])) {
$newpasswordError = "Can not be empty";
} else {
$newpassword = $_POST["newpassword"];
if ($newpassword == $currentpassword) {
$newpasswordError = "Old Password ";
} elseif (!preg_match("/\W/", $newpassword)) {
$newpasswordError = "Must have atleast one special character";
}
}

if (empty($_POST["confirmpassword"])) {
$confirmpasswordError = "Can not be empty";
} else {
$confirmpassword = $_POST["confirmpassword"];
if ($confirmpassword != $newpassword) {
$confirmpasswordError = "Password does not match";
}
}
}
?>

<h2>CHANGE PASSWORD</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

<div style="color: Balck">
Current Password : <input type="text" name="currentpassword" value="<?php echo $currentpassword ?>"><br>
<span style="font-size: 15px;" class="error"><?php echo $currentpasswordError; ?></span>
</div>
<div style="color: Black">
New Password : <input type="password" name="newpassword" value="<?php echo $newpassword ?>"><br>
<span style="font-size: 15px;" class="error"><?php echo $newpasswordError; ?></span>
</div>
<div style="color: Black">
Retype New Password : <input type="password" name="confirmpassword" value="<?php echo $confirmpassword ?>"><br>
<span style="font-size: 15px;" class="error"><?php echo $confirmpasswordError ?></span>
</div><br>
<div style="text-align: right"> <input type="submit" name="submit" value="Submit"></div>
</form>
</body>

</html>