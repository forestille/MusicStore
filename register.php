<?php
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/funcs.php';
$products = get_products();
$users = get_users();

$email = '';
$password = '';
if(!empty($_GET['submit'])){
    if(!empty($_GET['email']) && !empty($_GET['password'])){
        $email = $_GET['email'];
        $password = $_GET['password'];
        add_user($email, $password, 0);
        header("Location: /loginpage.php");
        die;
    }
    else{
        echo 'Заполните все поля!';
    }
}
