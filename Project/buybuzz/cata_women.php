<?php
 require 'header.php';
if (isset($_POST["add_to_cart"])) {
	if (isset($_SESSION["shopping_cart"])) {
		
		$item_array_id= array_column($_SESSION["shopping_cart"], "item_id");
			if (!in_array($_GET["id"], $item_array_id)) {
				
				$count= count($_SESSION["shopping_cart"]);
				$item_array=array(
				'item_id'  => $_GET["id"],
				'item_name'  => $_POST["hidden-name"],
				'item_price'  => $_POST["hidden-price"],
				'item_quantity'  => $_POST["quantity"],
				);
				$_SESSION["shopping_cart"][$count]= $item_array;

			}
			else{

				echo '<script>alert("Item Already Added")</script>';
				echo '<script>window.location="cart.php"</script>';
			}


	}
	else{

		$item_array=array(
			'item_id'  => $_GET["id"],
			'item_name'  => $_POST["hidden-name"],
			'item_price'  => $_POST["hidden-price"],
			'item_quantity'  => $_POST["quantity"],
		);
		$_SESSION["shopping_cart"][0]=$item_array;
	}
}

if (isset($_GET["action"])) {
  	if ($_GET["action"]=="delete") {
  		foreach ($_SESSION["shopping_cart"] as $keys => $values) {
  			if ($values["item_id"]==$_GET["id"]) {
  				unset($_SESSION["shopping_cart"][$keys]);
  				echo '<script>alert("item Removed")</script>';
  				echo '<script>window.location="cata_women.php"</script>';
  			}
  		}
  	}
  }  

?>


<?php
 
 $sql2 = "SELECT* from products where cate_id='2' order by p_id asc";
 $result2 = mysqli_query($connection, $sql2);
 $resultCheck2 = mysqli_num_rows($result2);
 ?>
 
 


<?php
for($i=1;$i<=$resultCheck2;$i++)
{
    $row1= mysqli_fetch_assoc($result2);
?>
			<div class="column">
				<br height="2px">
				<form method="post" action="cata_women.php?action=add&id=<?php echo $row1['p_id'] ?>">
					<img height="90" width="90" src="img/<?php echo $row1['p_img']?>" title="<?php echo $row1['p_name']?>">
					<br><?php echo 'ID :'; echo $row1['p_id']?>
					<br><?php echo $row1['p_name']?>
					<br><?php echo 'Price :'; echo $row1['p_price']?>
					<br><input type="text" name="quantity" value="1" />
					<input type="hidden" name="hidden-name" value="<?php echo $row1['p_name']; ?>" />
					<input type="hidden" name="hidden-price" value="<?php echo $row1['p_price']; ?>" />
					<br> 
					<input type="submit" name="add_to_cart" value="Add to cart" />

				</form>
					<br><br>
			</div>

<?php 
}
?>

