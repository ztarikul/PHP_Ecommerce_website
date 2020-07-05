<?php
	require 'header.php';

?>

<section class="main-container">
		<div class="main-wrapper">
				<form class="signup-form" action="search_product.inc.php" method="post">
					<input type="text" name="pID" placeholder="Search by ID">
					<br><br>
					<input type="text" name="pName" placeholder="Search by Name">

					<button type="submit" name="search-submit" value="search"> Search </button>
				</form>
		</div>
</section>

<?php
	require 'footer.php';
?>