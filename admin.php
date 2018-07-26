<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] ==false) {
	header('location: login.php');
}




?>



<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css">

<title>Admin</title>
</head>
<body>

	<div class="content-area center">
	<div class="contact-form font-style">
			
	<h1> Welcome, Admin </h1>
	<p style="margin-top: 1em"> This page is only for admin-useage purpose and can be accessed using the special key. </p>
	<a href="addphoto.html"><input style="margin-top: 2em" type="submit" value="Add photo">
	<a href="logout.php"><input style="margin-top: 1em; background-color: tomato" type="submit" value="Log out">
	<a target="_blank" href="home.html"><input style="margin-top: 1em; background-color: gray" type="submit" value="Visit the original site">

	</div>
	</div>

	</body>
</html>