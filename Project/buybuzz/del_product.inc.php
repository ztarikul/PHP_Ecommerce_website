<?php
	require 'header.php';
?>

<?php
//var_dump($_GET['id']);
$productID=$_GET['id'];
$sql="DELETE FROM products WHERE p_id='$productID'";
$result = mysqli_query($connection, $sql);

header("location: products.php?Deleted");

?>

