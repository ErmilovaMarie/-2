<?php
require_once 'lib.php';
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login = $_POST['login'];
    $password = $_POST['password'];

    if(!user_auth($login, $password)){
        echo "<h2 class='text-danger'>Логин и пароль введен не правильно!</h2>";
    }
    else{
        header('Location: index.php');
        exit;
    }
}