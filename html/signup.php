<?php
session_start();
require 'constants.php';

$name = $_POST['name'];
$pass = $_POST['password'];
$no   = $_POST['num'];
$mail = $_POST['mail'];

$q = " select * from signin where name = '$name' && password ='$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);
echo "$num";


if($num == 1){
	echo"user already exist <a href='login.html'>click here</a> to go to login page";
}else{

	$qy = " insert into signin(name, password, number, mailid) values ('$name','$pass','$no','$mail') ";
	mysqli_query($con, $qy);
	header('location:login.html');
}

?>