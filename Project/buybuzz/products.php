<?php
 require 'header.php';
 
 $sql2 = "SELECT* from products order by p_id asc";
 $result2 = mysqli_query($connection, $sql2);
 $resultCheck2 = mysqli_num_rows($result2);
 ?>

<?php



for($i=0;$i<$resultCheck2;$i++)
{
	 $data= mysqli_fetch_assoc($result2);
?>
		<div class="column">
			<br>
			<img height="160" width="160" src="img/<?php echo $data['p_img']?>" title="<?php echo $pname[$i]?>"> 
			<br><?php echo "ID: "; echo $data['p_id']; ?>
			<br><?php echo $data['p_name'] ?>
			<br><?php echo "Price : "; echo $data['p_price'] ?>
			<br><?php echo "Availabe Stock: "; echo $data['p_quantity']?>
			<br><?php echo "Category: "; echo $data['cate_id']?>
			<br><br>
			<?php echo "<td><a href=\"del_product.inc.php?id={$data['p_id']}\">Delete</a></td>";?>
			<br>
			<?php echo "<td><a href=\"edit_product.inc.php?id={$data['p_id']}&Pname={$data['p_name']}&Price={$data['p_price']}&stock={$data['p_quantity']}&category={$data['cate_id']}\">Edit </a></td>";?>
		</div>

<?php 
}
?>







</table>
