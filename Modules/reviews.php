<?php

function getReviews(int $productId):array
{
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM review WHERE product_id=?');
    $sth->bindParam(1, $productId);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, 'review');
}
?>