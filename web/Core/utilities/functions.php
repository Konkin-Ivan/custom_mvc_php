<?php

use Core\Response;

function urlIs($value)
{
  return $_SERVER['REQUEST_URI'] === $value;
}

function abort($status_code = 404)
{
    http_response_code($status_code);
    require_once base_path("controllers/{$status_code}.php");
    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (! $condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require_once base_path('views/' . $path);
}