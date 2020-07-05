<?php

if (isset($_POST['login-submit'])) {

	require 'connection.php';

	$mailuid=$_POST['mailuid'];
	$password=$_POST['pwd'];

	if (empty($mailuid)||empty($password)) {
		header("location: index2.php?error=emptyfields");
		exit();
	}
	else{
		$sql= "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
		$stmt= mysqli_stmt_init($connection);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location:index2.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$result= mysqli_stmt_get_result($stmt);
			if ($row= mysqli_fetch_assoc($result)) {
				$pwdcheck= password_verify($password, $row['pwdUsers']);
				if($pwdcheck==false){
					header("location:index2.php?error=wrongpassword");
					exit();
				}

				else if ($pwdcheck== true) {
					session_start();
					$_SESSION['userId']=$row['idusers'];
					$_SESSION['userUid']=$row['uidUsers'];
					$_SESSION['roleid']=$row['ridUsers'];
					$_SESSION['userimg']=$row['pimgUsers'];

					header("location:index2.php?login=succes");
					exit();

				}

				else{
					header("location:index2.php?error=wrongpwd");
					exit();
				}
			}

			else{
				header("location:index2.php?error=nouser");
				exit();
			}
		}
	}

}

else{
	header("location: index.php");
	exit();
}