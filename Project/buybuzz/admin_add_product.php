<?php 
	require 'header.php';
 ?>
 <section class="main-container">
		<div class="main-wrapper">
				<form class="signup-form" action="admin_add_product.inc.php" method="post">
					<input type="text" name="pName" placeholder="Product Name">
					<input type="number" name="pPrice" placeholder="Product Price in BDT">
					<input type="file" name="pImg" placeholder="Product Image">
					<input type="number" name="pQantity" placeholder="Product Quantity">
					<input type="text" name="pcataID" placeholder="Product Catagory(1~9)">
					<button type="submit" name="add-submit" value="Add"> Add Product</button>
				</form>
		</div>
</section>