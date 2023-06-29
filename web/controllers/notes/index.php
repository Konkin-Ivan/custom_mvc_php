<?php

use Core\Database;

$title = 'Notes';

$config = require_once base_path('config.php');
$db = new Database($config['database']);

$notes = $db->query('select * from notes where user_id = 1')->get();

view('notes/index.view.php', [
    'title' => $title,
    'notes' => $notes
]);
