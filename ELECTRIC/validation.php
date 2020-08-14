<?php
session_start();
$con = mysqli_connect('localhost' , 'root');
if($con){
	echo "connection Succesfull";
}else{
	echo "no connection";
}

mysqli_select_db($con , 'session');

$name = $_POST['user'];
$pass = $_POST['password'];
	echo $name;
	echo $pass;
$q = " select * from sigin where name = '$name' && password = '$pass' ";
$result = mysqli_query($con, $q)or die("Error");

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;
	header('location:graph.php');
}else{
	header('location:graph.php');
}

?>