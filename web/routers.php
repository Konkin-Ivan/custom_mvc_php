<?php

//return [
//    '/' => 'controllers/index.php',
//    '/contact' => 'controllers/contact.php',
//    '/notes' => 'controllers/notes/index.php',
//    '/note' => 'controllers/notes/show.php',
//    '/note/create' => 'controllers/notes/create.php',
//    '/about' => 'controllers/about.php'
//];

$router->get('/', 'controllers/index.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/about', 'controllers/about.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->get('/note/create', 'controllers/notes/create.php');
$router->delete('/note', 'controllers/notes/destroy.php');
