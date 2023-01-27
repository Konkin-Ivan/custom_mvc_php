<?php

require_once 'functions.php';
require_once 'Database.php';
require_once 'router.php';
//phpinfo();

$config = require_once 'config.php';

$db = new Database($config['database']);

$posts = $db->query("select * from posts")->fetchAll();

foreach ($posts as $post) {
  echo "<li>" . $post['Title'] . "</li>";
}

echo '<pre>';
//var_dump($posts);
echo '</pre>';