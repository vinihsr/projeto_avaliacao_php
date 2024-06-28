<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once 'config/Database.php';
require_once 'models/User.php';
require_once 'controllers/UserController.php';

$database = new Database();
$db = $database->getConnection();

$controller = new UserController($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller->createUser($_POST['name'], $_POST['email'], $_POST['password']);
}

include 'views/user.php';
?>
