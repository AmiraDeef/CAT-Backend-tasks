<?php
session_start();
require "login.php";
//require "signup.php";
require "validator.php";

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$username = $_POST['username'] ?? '';

$login = new Login($email, $password);
$login->Checking();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
    $sign = new Signup($username, $email, $password);
    $errors = $sign->validation();

    if (empty($errors)) {

        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $email;
        header('Location: welcome.php');
        exit;
    } else {

        require_once "signup.php";
    }
}
