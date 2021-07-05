<?php

/**
 * Class CProducts
 */
class CProducts
{
    /**
     * @param $connect
     * @return array
     */
    public function getProducts($connect, $count)
    {
        $result = $connect->query('SELECT * FROM `products` WHERE hidden = 0 ORDER BY `date_create` DESC LIMIT ' . $count);

        $products = [];

        // получаем все строки в цикле по одной
        while($row = $result->fetch_assoc()) {
            $products[] = [
                'id' => $row['id'],
                'product_id' => $row['product_id'],
                'product_name' => $row['product_name'],
                'product_price' => $row['product_price'],
                'product_article' => $row['product_article'],
                'product_quantity' => $row['product_quantity'],
                'date_create' => $row['date_create'],
            ];
        }

        return $products;
    }

    /**
     * @param $connect
     * @param $id
     * @return mixed
     */
    public function hideProduct($connect, $id)
    {
        return $connect->query('UPDATE `products` SET `hidden` = 1 WHERE `id` = ' . $id);
    }

    /**
     * @param $connect
     * @return mixed
     */
    public function getCount($connect)
    {
        return $connect->query('SELECT COUNT(*) FROM `products` WHERE `hidden` = 0')->fetch_array()[0];
    }
}
