<?php
	require 'header.php';
?>

	 <section class="main-container">
		<div class="main-wrapper">
				<form class="signup-form" action="" method="GET">
					<input type="text" name="Pro_id" value="<?php  echo $_GET['id']; ?>">
					<input type="text" name="Pro_Name" value="<?php  echo $_GET['Pname']; ?>">
					<input type="number" name="Pro_Price" value="<?php echo $_GET['Price']; ?>" >
					<input type="file" name="Pro_Img" placeholder="Product Image">
					<input type="number" name="Pro_Qantity" value="<?php echo $_GET['stock']; ?>">
					<input type="text" name="Pro_cateID" value="<?php  echo $_GET['category']; ?>">
					<button type="submit" name="update-submit" value="update" > Update </button>
				</form>
		</div>
</section>

<?php
if (isset($_GET['update-submit'])){
	var_dump($_GET);
	//echo "pressed";
	$id=$_GET['Pro_id'];
	$name=$_GET['Pro_Name'];
	$price=$_GET['Pro_Price'];
	$pimg=$_GET['Pro_Img'];
	$pstock=$_GET['Pro_Qantity'];
	$pcate=$_GET['Pro_cateID'];
	$sql="UPDATE products SET p_name='$name', p_price='$price', p_img='$pimg',p_quantity='$pstock', cate_id='$pcate' WHERE p_id='$id' ";
	$data=mysqli_query($connection, $sql);


	if($data)
	{
		header("location: products.php");
		//echo "record updated";
	}
	else{
		echo "record not updated";
	}


}

else{

	?>
	<br>
	<div style="padding-left: 555px; "> <a style=" background-color: green; opacity: 1px; color:orange; padding-left: 1px; padding-top: 1px;"><?php echo " Press Update Button "; ?> </a></div>
<?php
}

?>