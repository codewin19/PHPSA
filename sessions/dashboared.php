<?php
session_start();
if(!isset($_SESSION['login']))
{
	header('Location:index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>	
	<h1>Dashboard Board</h1>
	<a href="logout.php">Logout</a>
</body>
</html>