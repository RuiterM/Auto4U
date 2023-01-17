<?php

function checkLogin():string
{
    global $pdo;
    $email=filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    $password=filter_input(INPUT_POST,'password');

    if ($email!==false && !empty($password))
        {
            $sql = 'SELECT * FROM `accounts` WHERE `email` = :e AND `password` = :p';
            $sql = $pdo->prepare($sql);
            $sql->bindParam(':e',$email);
            $sql->bindParam(':p',$password);
            $sql->setFetchMode(PDO::FETCH_CLASS, 'User');
            $sql->execute();
            $user = $sth->fetch();

            if ($user!==false)
            {
                $_SESSION['user']=$user;
                if ($_SESSION['usr']->role=="admin")
                {
                    return 'ADMIN';
                }
                else
                {
                    return 'MEMBER';
                }
            }
            return 'FAILURE';
        }
    return 'INCOMPLETE';
}

function isAdmin():bool
{
    //controleer of er ingelogd is en de user de rol admin heeft
    if(isset($_SESSION['user'])&&!empty($_SESSION['user']))
    {
        $user=$_SESSION['user'];
        if ($user->role == "admin")
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    return false;
}

function isMember():bool
{
    //controleer of er ingelogd is en de user de rol admin heeft
    if(isset($_SESSION['user'])&&!empty($_SESSION['user']))
    {
        $user=$_SESSION['user'];
        if ($user->role === "member")
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    return false;
}

function makeRegistration():string
{

}
