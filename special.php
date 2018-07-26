<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css">

<title>Home</title>
</head>
<body>

<div class="header-container">
	<div class="header">
		<p class="paragraph-black"> OFF THE STREET </p>
		<a href="home.html"> home </a>
		<a href="about.html"> about </a>
		<a href="photos.html"> photos </a>
		<a href="collab.html"> collab </a>
		<a href="special.php"> special </a>
		<a href="contact.html"> contact </a>
	</div>
</div>



</body>
</html>

<?php

$dir= 'C:\xampp\htdocs\uploads';
$contents=scandir($dir,2);

// print_r($contents);
// echo '<br/>';
$n= sizeof($contents);
// print_r($n);
// echo '<br/>';

echo '<br/>';
echo '<h1 style="font-family: montserrat; text-align:center"> Welcome to the special page </h1>';
echo '<p style="font-family: montserrat; text-align:center"> Photos here are hand-picked by the admin. It is a special collection. <br/> Thanks for your appreciation </p>';
echo '<br/>';

for($i=$n-1; $i>1; $i--) {
	echo '<div class="center"> <img style="width: 25vw" src="uploads/'.$contents[$i].'"> </div>';
	echo '<br/>';
	echo '<div class="center"> <p style="font-family: montserrat"> '.$contents[$i].' </p> </div>';
	echo '<br/>';
	echo '<br/>';
}


// foreach($contents as $content) {
// 	echo $content;
// }
?>

<footer class="footer"> &copy Hadiyev </footer>