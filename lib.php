<?php
include 'admin/connection.php';

// Проверяет, авторизован пользователь или нет
// Возвращает true если авторизован, иначе false
function user_is_auth() {
    if(isset($_SESSION["is_auth"])){ //Если сессия существует
        return $_SESSION["is_auth"]; //Возвращаем значение переменной сессии is_auth (хранит true если авторизован, false если не авторизован)
    }
    else{
        return false; //Пользователь не авторизован, т.к. переменная is_auth не создана
    }
}

// Авторизация пользователя
function user_auth($login, $password) {
    global $mysqli;

    $sql = "SELECT id, name, login, birthday, email, password, male
            FROM registration 
            WHERE login='".$login."' 
            AND password='".$password."'";

    if(!$result = mysqli_query($mysqli, $sql)){
        return false;
    }
    $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);

    if($login == $user[0]['login'] && $password == $user[0]['password']) { //Если логин и пароль введены правильно
        $_SESSION["is_auth"] = true; //Делаем пользователя авторизованным
        $_SESSION["login"] = $login; //Записываем в сессию логин пользователя
        return true;
    }
    else { //Логин и пароль не подошел
        $_SESSION["is_auth"] = false;
        return false;
    }

}

// Функция возвращает логин авторизованного пользователя
function login_get() {
    if(user_is_auth()){ //Если пользователь авторизован
        return $_SESSION["login"]; //Возвращаем логин, который записан в сессию
    }
}
// Выход
function user_exit() {
    $_SESSION = array(); //Очищаем сессию
    session_destroy(); //Уничтожаем
}

function user_select(){
    global $mysqli;

    $sql = "SELECT id, name, login, birthday, email, password, male
            FROM registration";

    if(!$result = mysqli_query($mysqli, $sql)){
        return false;
    }
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);

    return $users;
}
	$user = login_get();
	$sql = "SELECT name
            FROM registration 
            WHERE login='".$user."'";
