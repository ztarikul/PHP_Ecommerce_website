<?php
	require 'header.php';
  ?>

<?php
if ($_SESSION["roleid"]==1)
{
?>
	<div class="admin-menu">

		<div class="menu_bar" align="center">
			<ul class="list">
				<li><a href="products.php"> Products</a>
					<ul>
						<li><a href="admin_add_product.php"> ADD </a></li>
				
						<li><a href="search_product.php"> Search Product </a></li>
					</ul>
					
				<li><a href="#"> Cart</a></li>
				<li><a href="#"> User Info</a>	
			</ul>
		</div> 
	</div>
<?php
}

else{

	header("locaion:index.php");
	echo "You are not Admin of this Page ";
	exit();
}