<?php

include './CProducts.php';

$config = include 'dbconfig.php';

$connect = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['database']);

$cProducts = new CProducts();

echo $cProducts->getCount($connect);
