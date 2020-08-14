<?php
session_start();
header('location:graph.php');
$con = mysqli_connect('localhost' , 'root');
if($con){
	echo "connection Succesfull";
}else{
	echo "no connection";
}

mysqli_select_db($con , 'session');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = " select * from sigin where name = '$name' && password = '$pass' ";
$result = mysqli_query($con, $q)or die("Error");

$num = mysqli_num_rows($result);

if($num == 1){
	echo "User already exists";
}else{
	$qy = "insert into sigin(name , password) values('$name' , '$pass')";
	mysqli_query($con , $qy);
}

?>