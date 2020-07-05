<?php
	require 'connection.php';
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>BuyBuzz | Online shopping </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<menu class="all-menu-bar">

		<div class="menu_bar" align="center">
			<ul class="list">
				<li><a href="index.php"> Home </a></li>
							<li><a> Categories</a>
					<ul>
						<li><a href="cata_men.php"> MEN </a></li>
				
						<li><a href="cata_women.php"> WOMEN </a></li>

						<li><a href="cata_kids.php"> KIDS </a></li>
						<li><a href="accessories_02.php"> ACCESSORIES </a></li>
					</ul>
				</li>
					
				<li><a href="#"> About Us</a></li>
				<li><a > Contact Us</a>
					<ul>
						<li><a href="https://www.facebook.com/buybuzzOfficial/" target="_blank"> Facebook </a></li>
					</ul>
				</li>
				<li><a href="cart.php"> Cart</a></li>	

				
				
			</ul>
		</div> 
	</menu>

	<header>
		<nav>
			<div class="main-warpper">
				
				<div class="nav-login">
					<?php


						if (isset($_SESSION['userId'])) {
							echo '
						<form action="logout.inc.php" method="post">
							<button type="submit" name="logout-submit"> Logout </button>
						</form>';

						}
						else{
							echo '<form action="login.inc.php" method="post">
							<input type="text" name="mailuid" placeholder="Username/E-mai...">
							<input type="password" name="pwd" placeholder="Password...">
							<button type="submit" name="login-submit">Login</button>
						</form>
						<a href="signup.php">SignUp</a>
						</div>';
						}
					?>

					
					
			</div>
			<div class="userinfo">
				 <?php
				 	if (isset($_SESSION['userId'])){
						//echo 'You re logged in';
						  //var_dump($_SESSION);
						
						if ($_SESSION["roleid"]==1){

							?>
							<div class="admin_info">
								<img height="60" width="60" src="img/<?php echo $_SESSION['userimg']?>">
							<a>Admin ID: <?php echo $_SESSION['userId'];?></a><br>

							<a>Name: <?php echo $_SESSION['userUid']; ?></a><br>
							<a href="admin.php"> Admin</a>
							</div>

						<?php
						}
						else{

						?>
							<div class="admin_info">
							<img height="60" width="60" src="img/<?php echo $_SESSION['userimg']?>">
							<a>User ID: <?php echo $_SESSION['userId'];?></a> <br>
							<a>Name: <?php echo $_SESSION['userUid']; ?></a>
						</div>

						<?php	
						}


					}

				?>
			</div>
		</nav>



	</header>
