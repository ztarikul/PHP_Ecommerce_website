<?php
	require 'header.php';
?>

<?php
// echo $_SESSION['userId'];
 //var_dump($_SESSION);
// die();
//unset($_SESSION['userId']);
if (isset($_SESSION['userId'])) {
	?>

	<div style="width: 200px; height: 50px; margin: 0 auto; opacity: .8;  padding: 50px 0;
  border: 3px solid green;">
  		<p style="color: green; text-align: center;" >You are logged in</p>
	</div>
<?php
}
else{
	?>
		<div style="width: 200px; height: 50px; margin: 0 auto; opacity: .8;  padding: 50px 0;
  border: 3px solid green;">
  		<p style="color: green; text-align: center;" >You are logged Out</p>
  		<p style="color: green; text-align: center;" >Log In First</p>

	</div>
<?php
}

?>