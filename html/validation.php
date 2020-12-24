<?php
session_start();
require 'constants.php';

$name = $_POST['name'];
$pass = $_POST['password'];

$q = " select * from signin where name = '$name' && password ='$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);


if($num == 1){
	$_SESSION['username'] = $name;
	header('location:home.php');

}else{
	echo"user don't exist <a href='login.html'>click here</a> to go to regestration page";
}


?>