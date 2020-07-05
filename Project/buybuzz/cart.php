<?php
	require 'header.php';

	//var_dump($_SESSION['shopping_cart'][1]);
?>

<div>
	
	<h3 style="padding-left: 500px; font-family: arial; font-size: 30px;"> Order Details </h3>
		<table >
			<tr>
				<th width="40%"> Item </th>
				<th width="10%"> Quantity </th>
				<th width="20%"> Price </th>
				<th width="15%"> Total </th>
				<th width="5%"> Action </th>
			<br>
			</tr>
			<?php
			if (!empty($_SESSION["shopping_cart"])) {
				$total= 0;
				foreach ($_SESSION["shopping_cart"] as $keys => $values) {
					?>
					<tr width="40%">
						<br>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>BDT<?php echo $values["item_price"]; ?></td>
						<td><?php echo number_format($values["item_quantity"]* $values["item_price"], 2); ?></td>
						<td><a href="accessories_02.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span>Remove</span> </a></td>

					</tr>
				<?php
						$total = $total + ($values["item_quantity"]*$values["item_price"]);
				}
				?>
				<tr>
					<td colspan="3" align="right"> Total</td>
					<td align="right">BDT <?php echo number_format($total,2); ?></td>
					<td></td>
				</tr>
			<?php
			}
			?>

			

		</table>

</div>
