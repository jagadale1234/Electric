<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2> Welcome <?php echo $_SESSION['username'];?> </h2>
	<a href="logout.php">LOGOUT</a>
</body>
</html>