<?php
require_once "view/signup.view.php";
class Signup

{
    private $username;
    private $email;
    private $password;
    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function validation()
    {
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!Validator::string($this->username, 6, 255)) {
                $errors['password'] = 'Please provide a username of at least six characters.';
            }
            if (!Validator::email($this->email)) {
                $errors['email'] = 'Please provide a valid email address.';
            }

            if (!Validator::string($this->password, 6, 255)) {
                $errors['password'] = 'Please provide a password of at least six characters.';
            }
        }
    }
}
