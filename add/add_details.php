<?php
	include('../conn.php');
	
	$name=$_POST['name'];
	$address=$_POST['address'];
	$phone = $_POST['phone'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	mysqli_query($conn,"insert into details (name, address, phone, age, email, password) values ('$name', '$address', '$phone', '$age', '$email', '$password')");
	header('location:../login.php');

?>