<?php
require_once 'lib.php';
session_start();

user_exit(); //Выходим
header("Location: index.php"); //Редирект после выхода
exit;