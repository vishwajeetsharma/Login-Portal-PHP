<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.html');
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>CLIENT AREA</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="shortcut icon" href="../images/Earth.jpg">
</head>
<body>
	<div class="logo">
		<h1>
			SAVE EARTH
		</h1>
	</div>
	<div class="menu">
			<ul>
				<li><a class="active" href="#">HOME</a></li>
				<li><a href="about.html">ABOUT</a></li>
				<li><a href="privacy.html">PRIVACY POLICY</a></li>
				<li><a href="services.html">SERVICES</a></li>
				<li><a href="blog.html">BLOG</a></li>
				<li><a href="contact.html">CONTACT</a></li>
			</ul>
	</div>
	<div class="titles">
		<h1>SAVE EARTH</h1>
		<h2> Welcome <?php echo $_SESSION['username']; ?></h2>
	</div>
	<div class="catagries">
		<ul>
			<h1>Catagries</h1>
			<li><a href="#">POLLUTION</a></li>
			<li><a href="#">GLOBAL WARMING</a></li>
			<li><a href="#">EARTH QUAKES</a></li>
			<li><a href="#">TSUNAMI</a></li>
		</ul>
	</div>
	<div class="social">
		<ul>
			<h1>SOCIAL MEDIA</h1>
			<li><a href="https://facebook.com/jeetuj.sharma.12?ref=bookmarks/">FACEBOOK</a></li>
			<li><a href="#">TWITTER</a></li>
			<li><a href="#">INSTAGRAM</a></li>
			<li><a href="#">PINTERST</a></li>
			<li><a href="mailto:vishwajeetsharma9821593401@gmail.com">EMAIL</a></li>
		</ul>
		</div>
	<div class="out">
		<a href="logout.php">LOGOUT>></a>
	</div>
	<div class="content">
		<center><h2>POSTS</h2></center>
	</div>
</body>
</html>