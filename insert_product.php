<?php
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/funcs.php';
$products = get_products();
$users = get_users();

$title = '';
$img = '';
$price = '';
if(!empty($_GET['submit'])){
    if(!empty($_GET['title']) && !empty($_GET['img']) && !empty($_GET['price'])){
        $title = $_GET['title'];
        $img = $_GET['img'];
        $price = $_GET['price'];
        add_product($title, $img, $price);
        header("Location: /admin.php");
        die;
    }
    else{
        echo 'Заполните все поля!';
    }
}
