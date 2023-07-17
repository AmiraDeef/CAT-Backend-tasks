<?php
require "view/login.view.php";

class Login
{
    private $email;
    private $pass;

    public function __construct($email, $pass)
    {
        $this->email = $email;
        $this->pass = $pass;
    }

    public function Checking()
    {
        $stored_emails = [
            'a@gmail.com' => '111111',
            'b@gmail.com' => '222222',
            'c@gmail.com' => '333333'
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            foreach ($stored_emails as $stored_email => $stored_password) {
                if ($this->email === $stored_email && $this->pass === $stored_password) {
                    $_SESSION['logged_in'] = true;
                    $_SESSION['email'] = $this->email;

                    header('Location: welcome.php');
                    exit;
                }
            }
            echo "Invalid email or password.";
        }
    }
}
