<?php
error_reporting(-1);
session_start();
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/funcs.php';
$products = get_products();
$users = get_users();
if ($_SESSION['admin_session'] == -1){
    header("Location: loginpage.php");
}
elseif ($_SESSION['admin_session'] == 0){
    header("Location: noaccess.php");
}
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

    <title>Админ-панель</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="index.php">Музыкальный магазин</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a href="logout.php">Выйти</a>
                </li>

            </ul>

        </div>
    </nav>
    <div class="container admin-table">
        <div>
            <h2>Панель Администратора</h2>
            <h3>Товары</h3>
            <table border="1" width="100%">
                <tr>
                    <th>Id</th>
                    <th>Название</th>
                    <th>Изображение</th>
                    <th>Цена</th>
                    <th></th>
                </tr>
                <?php foreach($products as $p): ?>
                <tr>
                    <td><?=$p['id']?></td>
                    <td><?=$p['title']?></td>
                    <td><?=$p['img']?></td>
                    <td><?=$p['price']?> грн.</td>
                    <td><a href="delete_product.php?id=<?=$p['id']?>">Удалить</a></td>
                </tr>
                <?php endforeach ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="add_product.php">Добавить товар</a></td>
                </tr>
            </table>
            <h3>Пользователи</h3>
            <table border="1" width="100%">
                <tr>
                    <th>Id</th>
                    <th>E-mail</th>
                    <th>Пароль</th>
                    <th>Статус администратора</th>
                    <th></th>
                </tr>
                <?php foreach($users as $u): ?>
                <tr>
                    <td><?=$u['id']?></td>
                    <td><?=$u['email']?></td>
                    <td><?=$u['password']?></td>
                    <td><?=$u['admin']?></td>
                    <td><a href="delete_user.php?id=<?=$u['id']?>">Удалить</a></td>
                </tr>
                <?php endforeach ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="add_user.php">Добавить пользователя</a></td>
                </tr>
            </table>
        </div>
    </div>



</body>
</html>
