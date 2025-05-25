<?php

require 'config/function.php';


if(isset($_POST['loginBtn']))
{
	$email = $_POST["email"];
	$password = $_POST["password"];

	
	$result = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email'");

	if(mysqli_num_rows($result) === 1){

		$row = mysqli_fetch_assoc($result);

		if( password_verify($password, $row["password"]) ){
			$_SESSION["login"] = true;

			header("Location: admin/index.php");
			exit;
		}
	}

	$error = true;

}

?>