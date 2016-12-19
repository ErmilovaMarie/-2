<?php
include 'connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$hobbies = $_POST['hobbies'];
	
	
	$sql = "UPDATE registration SET name='$name', email='$email', city='$city', hobbies='$hobbies' WHERE id='.$_POST['id'].'";
			
	
	if(!mysqli_query($mysqli, $sql)){
		echo "Не получилось отправить!";
	}
	else{
		header('Location: my_page.php');
	}
}
?>