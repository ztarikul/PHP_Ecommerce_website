<?php
	require 'header.php';
?>

<?php

if (isset($_POST['search-submit'])) {

	require 'connection.php';

	$productID=$_POST['pID'];
	$productName=$_POST['pName'];

	if (empty($productID)) {
		header("location: search_product.php?error=emptyfields");
		exit();
	}
	else{
		$sql= "SELECT * FROM products WHERE p_id=?;";
		$stmt= mysqli_stmt_init($connection);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location:search_product.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $productID);
			mysqli_stmt_execute($stmt);
			$result= mysqli_stmt_get_result($stmt);
			if ($data= mysqli_fetch_assoc($result)) {
?>

			<div style="width: 205px; height: 270px; margin: 0 auto; ">
				<td><img height="200" width="200" src="img/<?php echo $data['p_img']?>"> <td/><br>
				<td><?php echo 'ID: '; echo $data['p_id'] ?><td/><br>
				<td><?php echo 'Product Name : ';echo $data['p_name'] ?><td/><br>
				<td><?php echo 'Price: ';echo $data['p_price'] ?><td/><br>
				<td><?php echo 'Stock : ';echo $data['p_quantity']?><td/><br>
				<td><?php echo "<td><a href=\"del_product.inc.php?id={$data['p_id']}\">Delete</a></td>";?><td/><br>
				<td><?php echo "<td><a href=\"edit_product.inc.php?id={$data['p_id']}&Pname={$data['p_name']}&Price={$data['p_price']}&stock={$data['p_quantity']}&category={$data['cate_id']}\">Edit </a></td>";?><td/>
			</div>

			<?php	
			}

			else{
			header("location:search_product.php?error=allerror");
			exit();
			}
		}
	}
}