<?php
//require 'connection.php';
if (isset($_POST['add-submit'])) {
	
	require 'connection.php';

	$productname=$_POST['pName'];
	$productprice=$_POST['pPrice'];
	$productimage=$_POST['pImg'];
	$productquantity=$_POST['pQantity'];
	$productcatagory=$_POST['pcataID'];

	if (empty($productname) || empty($productprice) || empty($productimage) || empty($productquantity) ) {
		header("location: admin_add_product.php?error=emptyfields&uid=");
		exit();
	}

	else{
	
			$sql="INSERT INTO products(p_name,p_price,p_img,p_quantity,cate_id) VALUES(?,?,?,?,?)";
			$stmt= mysqli_stmt_init($connection);

			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("location: admin_add_product.php?error=sqlerror");
				 exit();
			}
			else{
				mysqli_stmt_bind_param($stmt,"sssss",$productname,$productprice, $productimage,$productquantity,$productcatagory);
				mysqli_stmt_execute($stmt);
				header("location:admin_add_product.php?addproduct=success");
				exit();
			}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($connection);
}
else{
	header("location:admin_add_product.php");
	exit();
}