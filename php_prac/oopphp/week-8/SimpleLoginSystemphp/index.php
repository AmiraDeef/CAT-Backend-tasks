<?php
require "login.php";


$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$username = $_POST['username'] ?? '';

$login = new Login($email, $password);
$login->Checking();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
    require_once "signup.php";
    $username = $_POST['username'] ?? '';

    $sign = new Signup($username, $email, $password);
    $sign->validation();
}
