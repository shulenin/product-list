<?php

include './CProducts.php';

$config = include 'dbconfig.php';

$connect = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['database']);

$cProducts = new CProducts();

$count = $_GET['count'];

$products = $cProducts->getProducts($connect, $count);

foreach ($products as $product) {
    echo "<tr>
        <th scope=\"row\">{$product['id']}</th>
        <td>{$product['product_id']}</td>
        <td>{$product['product_name']}</td>
        <td>{$product['product_price']}</td>
        <td>{$product['product_article']}</td>
        <td>{$product['product_quantity']}</td>
        <td>{$product['date_create']}</td>
        <td>
            <button productid=\"{$product['id']}\" class=\"btn btn-primary hide\"'>Скрыть</button>
        </td>
    </tr>";
}
