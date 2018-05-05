<?php
	include 'includes/dbh.php'
?>

<!DOCTYPE html>
<html>
<head>
	
	
	<title></title>

	
	<link rel="stylesheet" type="text/css" href="includes/style.css" />


<header>
	<nav> 
		
		<div id="menu-logo">
			<li class="headerMenu"><a href="index.php"><img src="logo1.png"></a></li>
		</div>

		<div>
			<ul class="headerMenu">
				<li><a href="index.php">Search</a></li>
				<li><a href="browse.php">browse</a></li>
				<li><a href="signup.php">Sign Up</a></li>
				<li><a href="login.php">Log In</a></li>
			</ul>
		</div>
	
		<div class="nav-login">
			<form>
				<input type="text" name="uid" placeholder="Username/e-mail" />
				<input type="password" name="pwd" placeholder="password" autocomplete="off" />
				<button type="submit" name="submit">Login</button>
			</form>
			<form><button type="submit" name="signup"><a href="signup.php">Sign Up</a></button></form>
		</div>
	</nav>
</header>





</head>
<body>
		