<?php
error_reporting(-1);
session_start();
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/funcs.php';
$products = get_products();
$users = get_users();


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="assets/css/main.css">

    <title>Добавить товар</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="catalog.php">Музыкальный магазин</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <input type=button class="btn btn-primary" onClick="location.href='logout.php'"
                       value='Выход'>
            </li>

        </ul>

    </div>
</nav>
<div class="container">
    <h3>Добавить товар</h3>
    <form action="insert_product.php" method="get">
        <label>Название: </label><input type="text" name="title"><br><br>
        <label>Изображение: </label><input type="text" name="img"><br><br>
        <label>Цена: </label><input type="number" name="price"><br><br>
        <button type="submit" name="submit" value="add">Добавить</button>
    </form>
</div>



</body>
</html>
