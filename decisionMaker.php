<?php

require_once "vendor/autoload.php";

use PHP_COMPOSER28\Controllers\UserController;

$dotenv = \Dotenv\Dotenv::createImmutable(paths: __DIR__);
$dotenv->load(); // .env => $_ENV

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['login'])) {
    $userController = new UserController();
    $userController->login($_POST);
}


if(isset($_POST['register'])) {
    $userController = new UserController();
    $userController->register($_POST);
}


