<?php

use Core\Database;

$title = 'Note';


//dd(parse_url($_SERVER['REQUEST_URI'])['query']);

// получение параметров строки адреса
$queryString = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);

// разбиение параметров на пары ключ-значение и запись в массив $_GET
parse_str($queryString, $_GET);

// получение значения параметра 'id'
$id = (int)$_GET['id'];

$currentUserId = 1;

$config = require_once base_path('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $note = $db->query('select * from notes where id = :id', [
        'id' => $id
    ])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    $db->query('delete from notes where id = :id', [
        'id' => $_GET['id']
    ]);

    header('location: /notes');
    exit();

} else {
    $note = $db->query('select * from notes where id = :id', [
        'id' => $id
    ])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    view('notes/show.view.php', [
        'title' => $title,
        'note' => $note
    ]);
}


