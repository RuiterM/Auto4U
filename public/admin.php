<?php
global $params;

//check if user has role admin
if ($_SESSION['user']->role!="admin") {
    echo "faya";
} else {
/* $params[2] is de action
   $params[3] is een getal die de delete action nodig heeft
*/
    switch ($params[2]) {

        case 'home':
            include_once '../Templates/admin/adminhome.php';
            break;

        case 'products':
            break;

        case 'add':
            break;

        case 'delete':
            break;

        default:
            break;
    }
}