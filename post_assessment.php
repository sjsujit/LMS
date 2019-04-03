<?php
$con=mysqli_connect("localhost","root","","goodwill");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

<!doctype html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
		<meta charset="UTF-8">
		<title>Training Page</title>
		<link rel="stylesheet" href="style.css">
</head>
<body>

	<header>
	<img src="header." class="header">
	</header>
<h1><center>Learning Management System</center></h1>
<nav>
	<ul>
		<a href="#"><li>Home</li></a>
		<a href="#"><li>Training</li></a>
		<a href="#"><li>Contact Us</li></a>
		<a href="#"><li>View profile</li></a>
		<a href="#"><li>Logout</li></a>
	</ul>
</nav>
<article>	
<table>
    <center>
    <tr>
    <?php include 'quiz.php';?>
    <?php include 'check.php';?>
    </tr>
    </center>
</table>
</article>

<footer>
  <img src="footer.jpeg" class="footer">
</footer>
</body>
</html>	