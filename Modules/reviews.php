<?php

function getReview(int $productId):review
{
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM reviews WHERE prod_id=?');
    $sth->bindParam(1, $productId);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, 'review')[0];
}
?>