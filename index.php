<?php
require_once('Controller/HomeController.php');
require_once('Model/Database.php');
require_once('Model/thoitrang.php');
$route = $_GET['route'] ?? '';
switch($route){
    case 'add':
        $homeController = new HomeController();
        $homeController->add();
        break;
    case 'edit':
        $homeController = new HomeController();
        $homeController->edit();
        break;
    case 'delete':
        $homeController = new HomeController();
        $homeController->delete();
        break;
    default:
        $homeController = new HomeController();
        $homeController->home();
        break;
}