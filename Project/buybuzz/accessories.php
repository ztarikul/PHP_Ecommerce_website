<?php
 require 'header.php';
 
 $sql2 = "SELECT* from products where cate_id='4' order by p_id asc";
 $result2 = mysqli_query($connection, $sql2);
 $resultCheck2 = mysqli_num_rows($result2);
 ?>
 
 
 <table class="products-show" style="margin:0 auto;">


<?php
for($i=1;$i<=$resultCheck2;$i++)
{
    $row1= mysqli_fetch_assoc($result2);
?>
			<div class="column">
				<br height="2px">
					<img height="90" width="90" src="img/<?php echo $row1['p_img']?>" title="<?php echo $row1['p_name']?>">
					<br><?php echo 'ID :'; echo $row1['p_id']?>
					<br><?php echo $row1['p_name']?>
					<br><?php echo 'Price :'; echo $row1['p_price']?>
					<br><?php  echo 'Availabe Stock :'; echo $row1['p_quantity']?>
					<br><br><a style="color: green; border:1px solid black; 1px;" href="">Add to Cart</a>

					<br><br>
				
			</div>

<?php 
}
?>

<table/>
