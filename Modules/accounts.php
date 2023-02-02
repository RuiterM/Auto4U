<?php

function getAccount(int $accountId):account
{
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM accounts WHERE id=?');
    $sth->bindParam(1, $accountId);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, 'account')[0];
}

?>