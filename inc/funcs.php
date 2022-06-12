<?php

function debug(array $data): void
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function get_products(): array
{
    global $pdo;
    $res = $pdo->query("SELECT * FROM products");
    return $res->fetchAll();
}
function get_users(): array
{
    global $pdo;
    $res = $pdo->query("SELECT * FROM users");
    return $res->fetchAll();
}

function get_product(int $id): array|false
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}
function get_user(int $id): array|false
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}
function delete_product(int $id): void
{
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$id]);
}
function delete_user(int $id): void
{
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$id]);
}
function add_product(string $title, string $img, int $price): void{
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO products(title, img, price) VALUES (?,?,?)");
    $stmt->execute([$title, $img, $price]);
}
function add_user(string $email, string $password, int $admin): void{
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO users(email, password, admin) VALUES (?,?,?)");
    $stmt->execute([$email, $password, $admin]);
}
function login(string $email, string $password): int
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT 1 FROM users WHERE email = ? and password = ?");
    $stmt->execute([$email, $password]);
    return $stmt->rowCount();
}
function getSession(string $email): void
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT admin FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $array = $stmt->fetch();
    $_SESSION['admin_session'] = $array['admin'];
}

function add_to_cart($product): void
{
    if (isset($_SESSION['cart'][$product['id']])) {
        $_SESSION['cart'][$product['id']]['qty'] += 1;
    } else {
        $_SESSION['cart'][$product['id']] = [
            'title' => $product['title'],
            'price' => $product['price'],
            'qty' => 1,
            'img' => $product['img'],
        ];
    }

    $_SESSION['cart.qty'] = !empty($_SESSION['cart.qty']) ? ++$_SESSION['cart.qty'] : 1;
    $_SESSION['cart.sum'] = !empty($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $product['price'] : $product['price'];
}

