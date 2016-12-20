<?php
include 'admin/connection.php';
include 'lib.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name = $_POST['name'];
	$login = $_POST['login'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$birthday = $_POST['birthday'];
	$optionsRadios = $_POST['optionsRadios'];
	
	$sql = "INSERT INTO registration(name, login, birthday, email, password, male) VALUES('$name', '$login', '$birthday', '$email', '$password', '$male')";
			
	
	if(!mysqli_query($mysqli, $sql)){
		echo "Не получилось отправить!";
	}
	else{
		header('Location: index.php');
	}
}