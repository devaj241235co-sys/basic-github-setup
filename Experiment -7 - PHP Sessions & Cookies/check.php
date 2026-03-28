<?php
session_start();
$users = array(
"admin" => "1234",
"devaj" => "5678",
"user" => "abcd"
);
$username = trim($_POST['username']);
$password = trim($_POST['password']);
if($username == "" || $password == "")
{
echo "<h3 style='color:red;'>Please enter all fields</h3>";
exit();
}
if(isset($users[$username]) && $users[$username] === $password)
{
$_SESSION['user'] = $username;
setcookie("user", $username, time()+3600);
header("Location: dashboard.php");
exit();
}
else
{
echo "<h3 style='color:red;'>Invalid Username or Password</h3>";
}
?>
