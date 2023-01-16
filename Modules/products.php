<?php

function getProducts(int $catagoryId):array
{
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM product WHERE cat_id=?');
    $sth->bindParam(1, $catagoryId);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, 'product');
}

function getProduct(int $productId):product
{
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM products WHERE id=?');
    $sth->bindParam(1, $productId);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, 'product')[0];
}



?>
