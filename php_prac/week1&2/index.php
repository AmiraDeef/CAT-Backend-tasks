<?php
$error = ['username' => '', 'email' => ''];
if (isset($_POST['submit'])){
    $username=trim($_POST['username']);
    $email=trim($_POST['email']);

    //validate
    if(empty($username)){
        $error['username']='Please enter your username';
    }elseif (!preg_match("/^[a-zA-Z][a-zA-Z0-9]{2,14}$/",$username)){
        $error['username']='Please enter Valid username with letters and numbers only';

    }if(empty($email)){
        $error['email']='Please enter an Email';
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error['email']='Please enter a Valid Email';
    }
    if ((empty($error['username']) && empty($error['email']))){
        header('Location: welcome.php?username='.$username);
        exit;

    }

}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            margin:0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f4f4f4;
        }

        h1 {
            margin-bottom: 20px;
        }
        form{
            width: 350px;
            padding: 12px;
            margin-bottom: 10px;

            transition: border-color 0.2s;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
            display: block;
        }
        p {
            color: red;
            font-size: 11px;
            text-align: center;
        }


        button{
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover{
            background-color: #0056b3;
        }
        </style>
</head>
<body>
<div >
<h1>Login</h1>
<form action="" method="post">

    <div class="form-group">
    <label>Username
        <input type="text" name="username" placeholder="Enter your Username" class="form-control">
    </label>
        <p><?=($error['username'])??'' ?></p>
    </div>

    <div class="form-group">
    <label>Email
        <input type="email" name="email" placeholder="Enter your Email" class="form-control" >
    </label>
        <p><?=($error['email'])??'' ?></p>
    </div>


    <button type="submit" name="submit"> submit </button>

</form>
</div>
</body>
</html>

