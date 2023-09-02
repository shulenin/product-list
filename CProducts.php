<?php

class CProducts
{
    public function getProducts($connect, $count)
    {
        $result = $connect->query('SELECT * FROM `products` WHERE hidden = 0 ORDER BY `date_create` DESC LIMIT ' . $count);

        $products = [];

        while($row = $result->fetch_assoc()) {
            $products[] = [
                'id' => $row['id'],
//                'product_id' => $row['product_id'],
                'product_name' => $row['name'],
                'product_price' => $row['price'],
                'product_article' => $row['article'],
                'product_quantity' => $row['quantity'],
                'date_create' => $row['date_create'],
            ];
        }

        return $products;
    }

    public function hideProduct($connect, $id)
    {
        return $connect->query('UPDATE `products` SET `hidden` = 1 WHERE `id` = ' . $id);
    }

    public function getCount($connect)
    {
        return $connect->query('SELECT COUNT(*) FROM `products` WHERE `hidden` = 0')->fetch_array()[0];
    }
}
