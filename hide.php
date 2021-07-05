<?php

include './CProducts.php';

$config = include 'dbconfig.php';

$connect = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['database']);

$cProducts = new CProducts();

$id = $_GET['id'];

if (!$cProducts->hideProduct($connect, $id)) {
    throw new Exception('Не удалось скрыть запись');
}
