<?php
session_start();
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/funcs.php';
$products = get_products();
$users = get_users();

$email = '';
$password = '';
$_SESSION['admin_session'] = -1;
if(!empty($_GET['submit'])) {
    if (!empty($_GET['email']) && !empty($_GET['password'])) {
        $email = $_GET['email'];
        $password = $_GET['password'];
        $_SESSION['admin_session'] = getSession($email);
        if (login($email, $password) == 1) {
            header("Location: /catalog.php");
            die;
        }

    } else {
        echo 'Неверный логин/пароль';
    }
}

    else{
        echo 'Заполните все поля!';
    }

