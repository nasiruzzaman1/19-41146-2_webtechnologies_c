<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "wtproject";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
 function CheckUser($conn,$table,$username,$password)
 {
   $result = $conn->query("SELECT * FROM $table WHERE username='$username' AND password='$password'");
   return $result;
 }

 function UpdateUser($conn,$table,$name,$username,$email,$contact,$password)
 {
  $result = $conn->query("UPDATE $table SET name='$name',email='$email',contact='$contact',password='$password' WHERE username='$username'");
  return $result;
 }

 function InsertUser($conn,$table,$name,$username,$email,$contact,$password)
 {
  $result = $conn->query("INSERT INTO $table (name, username, email, contact, password) VALUES ('$name','$username', '$email', '$contact', '$password')");
  return $result;
 }

 

 function DeleteUser($conn,$table,$username)
 {
  $result = $conn->query("DELETE FROM $table WHERE username='$username'");
  return $result;
 }

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>