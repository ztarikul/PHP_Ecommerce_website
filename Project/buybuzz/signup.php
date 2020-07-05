<?php
	 require "header.php";
?>
<section class="main-container">
		<div class="main-wrapper">
			<?php
				if (isset($_GET['error'])) {
					if ($_GET["error"]=="emptyfields") {
						echo '<p class="signuperror">Fill in all fields!</p>';
					}

					else if ($_GET["error"]=="invalidmailuid") {
						echo '<p class="signuperror">Fill in all fields!</p>';
					}

					else if ($_GET["error"]=="invalidmail&uid") {
						echo '<p class="signuperror">Fill in all fields!</p>';
					}

					else if ($_GET["error"]=="invaliduid&mail") {
						echo '<p class="signuperror">Fill in all fields!</p>';
					}

					else if ($_GET["error"]=="passwordcheckuid") {
						echo '<p class="signuperror">Password do not match!</p>';
					}

					else if ($_GET["error"]=="usertaken&mail") {
						echo '<p class="signuperror"> Username is already taken!</p>';
					}

					else if ($_GET["signup"]=="success") {
						echo '<p class="signuperror">Signup Successful!</p>';
					}
				}
			?>
				<form class="signup-form" action="signup.inc.php" method="post">
					<input type="text" name="uid" placeholder="Username">
					<input type="text" name="mail" placeholder="E-mail">
					<input type="password" name="pwd" placeholder="Password">
					<input type="password" name="pwd-repeat" placeholder="Repeat Password">
					<input type="file" name="prfimg" placeholder="Upload Profile Picture">
					<button type="submit" name="signup-submit" value="Signup"> Signup</button>
				</form>
		</div>
</section>

