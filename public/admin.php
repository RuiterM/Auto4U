<?php
global $params;
include_once '../Modules/login.php';
include_once '../Modules/logout.php';


//check if user has role admin
if (!isAdmin()) {
    logout();
    header ("location:/admin/home");
} else {
    /* $params[2] is de action
       $params[3] is een getal die de delete action nodig heeft
    */
    switch ($params[2]) {

        case 'home':
            include_once "../Templates/admin/adminhome.php";
            break;
        case 'logout':
            logout();
            header("Location: /home");
            break;

        default:
            break;
    }
}