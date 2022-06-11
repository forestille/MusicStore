<?php
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/funcs.php';
$products = get_products();
$users = get_users();

$id='';
if(!empty($_GET['id'])){
    $id = $_GET['id'];
}

delete_user($id);
header("Location: /admin.php");
die;