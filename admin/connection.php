<?php

$connection = mysqli_connect("localhost", "root", "", "phpdasar");

if (!$connection) {
	die("Connection failed:" . mysqli_connect_error());
}
	
?>