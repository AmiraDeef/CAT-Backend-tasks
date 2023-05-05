<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];



if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}
if (!empty($errors)) {
    //vaildation issues
    return view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => $errors
    ]);
}
$db->query('INSERT INTO notes(body, uc_id) VALUES(:body, :uc_id)', [
    'body' => $_POST['body'],
    'uc_id' => 1
]);
header('location:/notes');
die();

//vaildation issues