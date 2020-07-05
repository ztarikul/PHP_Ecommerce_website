<?php
	require 'connection.php';
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<menu class="all-menu-bar">

		<div class="menu_bar" align="center">
			<ul class="list">
				<li><a href="index.php"> Menu </a></li>
							<li><a> Categories</a>
					<ul>
						<li><a href="cata_men.php"> MEN </a></li>
				
						<li><a href="cata_women.php"> WOMEN </a></li>

						<li><a href="cata_kids.php"> KIDS </a></li>
						<li><a href="accessories.php"> ACCESSORIES </a></li>
					</ul>
				</li>
					
				<li><a href="#"> About Us</a></li>
				<li><a href="#"> Contact Us</a>
					<ul>
						<li><a href="https://www.facebook.com/buybuzzOfficial/" target="_blank"> Facebook </a></li>
					</ul>
				</li>
				<li><a href=""> Cart</a></li>	

				
				
			</ul>
		</div> 
	</menu>

	<header>
		<nav>
			<div class="main-warpper">
				
				<div class="nav-login">
					<div <?php if( isset($_SESSION['userId'])  &&  !is_null($_SESSION['userId']) ) { echo "style='display:none'";} ?> >
						<form action="login.inc.php" method="post">
							<input type="text" name="mailuid" placeholder="Username/E-mai...">
							<input type="password" name="pwd" placeholder="Password...">
							<button type="submit" name="login-submit">Login</button>
						</form>
						<a href="signup.php">SignUp</a>
					</div>
					<div <?php if( !isset($_SESSION['userId'])  ||  is_null($_SESSION['userId']) ) { echo "style='display:none'";} ?>>
						<form action="logout.inc.php" method="post">
							<button type="submit" name="logout-submit"> Logout </button>
						</form>
					</div>
			</div>
		</nav>
	</header>

</body>
</html>