<?php
require '../Modules/categories.php';
require '../Modules/login.php';
require '../Modules/logout.php';
require '../Modules/database.php';
require '../Modules/common.php';
require '../Modules/products.php';

session_start();
//var_dump($_SESSION);
//var_dump($_POST);
$message="";



$request = $_SERVER['REQUEST_URI'];

$params = explode("/", $request);
//print_r($request);
$title = "Auto4u";
$titleSuffix = "";

//$params[1] is de action
//$params[2] is een extra getal die de action nodig heeft om zijn taak uit te voeren
switch ($params[1]) {

    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        include_once "../Templates/categories.php";
        break;

    case 'category':
        $products=getProducts($params[2]);
        //echo "<pre>";var_dump($products);echo "</pre>";die;
        include_once "../Templates/products.php";
        break;

    case 'product':
        include_once "../Templates/products.php";
        break;

    case 'login':
        $titleSuffix = ' | Home';

        include_once "../Templates/login.php";
        break;

    case 'cars':
       include_once "../Templates/cars.php";
       break;

    case 'details':
        $product=getProduct($params[2]);
        include_once "../Templates/details.php";
        break;


        case 'logout':
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;

    case 'register':
        $titleSuffix = ' | Home';
        include_once "../Templates/register.php";
        break;

    case 'contact':
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;

    case 'admin':
        include_once('admin.php');
        break;

    case 'member':
        include_once('member.php');
        break;

    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}







