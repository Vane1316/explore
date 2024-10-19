<?php
include_once '../Controller/UserController.php';

$username = $_POST['username'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$role = $_POST['role'] ?? null; // Aquí tomamos el campo 'role'

$userController = new UserController();
$userController->register($username, $email, $password, $role);
