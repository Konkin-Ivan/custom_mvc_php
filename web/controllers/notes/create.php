<?php

use Core\Validator;
use Core\Database;

require_once base_path('Core/Validator.php');

$title = 'Create Note';

$config = require_once base_path('config.php');
$db = new Database($config['database']);
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'Текст не должен быть меньше 1 и больше 1000 символов';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

view('notes/create.view.php', [
    'title' => $title,
    'errors' => $errors
]);
