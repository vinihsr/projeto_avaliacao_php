<?php
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
