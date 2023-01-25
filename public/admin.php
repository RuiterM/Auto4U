<?php
global $params;

//check if user has role admin
<<<<<<< Updated upstream
if (!isAdmin()) {
    logout();
    header ("location:/home");
} else {
/* $params[2] is de action
   $params[3] is een getal die de delete action nodig heeft
*/
    switch ($params[2]) {

        case 'home':
            include_once '../Templates/admin/home.php';
            break;
=======
if ($_SESSION['user']->role!=="admin") {
    echo "faya";
    if (!isAdmin()) {
        logout();
        header("location:/home");
    } else {
        /* $params[2] is de action
           $params[3] is een getal die de delete action nodig heeft
        */

        switch ($params[2]) {
>>>>>>> Stashed changes

            case 'home':
                include_once '../Templates/admin/adminhome.php';
                break;

            case 'products':
                include_once "../Templates/admin/adminhome.php";
                break;

            case 'add':
                break;

            case 'delete':


            case 'logout':
                logout();
                header("Location: /home");
                break;

            default:
        }
    }
}