<?php
session_start();
header("Cache-Control: no-cache, no-store, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");
if(!isset($_SESSION['user']))
{
header("Location: login.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
</head>
<body>
<h2>Welcome <?php echo $_SESSION['user']; ?></h2>
<p>You are successfully logged in.</p>
<a href="logout.php">Logout</a>
</body>
</html>
