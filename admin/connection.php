<?php
	$mysqli = new mysqli('localhost','root','','kulibin');
	if (mysqli_errno($mysqli))
		return 'Ошибка подключения к БД'.mysqli_errno($mysqli);