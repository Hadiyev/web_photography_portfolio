

<?php
	session_start();

	$username = "user";
	$password = "pass";

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		header ("location: admin.php");
	}

	if (isset($_POST['username']) && isset($_POST['password'])) {
		if($_POST['username'] == $username && $_POST['password'] == $password) {
			$_SESSION['loggedin']=true;
			header ("location: admin.php");
		}

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


		<h1>Access for Control Panel</h1>
		<p style="margin-top: 1em ; margin-bottom: 2em"> Once logged in, you can use the tools designed for the admin.</p>
		<form method="post" action="login.php">
			Username:<br/>
			<input  type="text" name="username"><br/>
			Password<br/>
			<input type="text" name="password"><br/>
			<input type="submit" value="Login">
		</form>

	</div>
	</div>

	</body>
</html>