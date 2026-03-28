<?php
session_start();
if(isset($_SESSION['user']))
{
header("Location: dashboard.php");
exit();
}
$username = "";
if(isset($_COOKIE['user']))
{
$username = $_COOKIE['user'];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
<h2>User Login</h2>
<form action="check.php" method="post">
Username:<br>
<input type="text" name="username" value="<?php echo $username; ?>" required>
<br><br>
Password:<br>
<input type="password" name="password" required>
<br><br>
<input type="submit" value="Login">
</form>
</body>
</html>
