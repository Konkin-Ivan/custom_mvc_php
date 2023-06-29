<?php

use Core\Database;

$config = require_once base_path('config.php');
$db = new Database($config['database']);

$posts = $db->query("select * from posts")->get();

view('index.view.php', [
    'title' => 'Home',
    'posts' => $posts
]);
