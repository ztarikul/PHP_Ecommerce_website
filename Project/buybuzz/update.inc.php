<?php
//require 'connection.php';
	//var_dump($_GET['id']);
if (isset($_POST['update-submit'])) {
	require 'header.php';
	var_dump($_SESSION);
	/*
	$productname=$_POST['pName'];
	$productprice=$_POST['pPrice'];
	$productimage=$_POST['pImg'];
	$productquantity=$_POST['pQantity'];
	$productcatagory=$_POST['pcataID'];

	$sql="UPDATE products SET p_name='?', p_price=?, p_img='?',p_quantity=?, cate_id='?' WHERE p_id=$pid";
	$stmt= mysqli_stmt_init($connection);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: edit_product.inc.php?error=sqlerror");
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,"sssss",$productname,$productprice, $productimage,$productquantity,$productcatagory);
		mysqli_stmt_execute($stmt);
		header("location: edit_product.inc.php?update=success");
		exit();
	}

	mysqli_stmt_close($stmt);
	//mysqli_close($connection);
}

else{
	header("location: edit_product.inc.php");
	exit();*/
}
