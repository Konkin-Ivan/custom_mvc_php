<?php

echo '<pre>';
//var_dump($_SERVER['REQUEST_URI']);
echo '</pre>';

function urlIs($value)
{
  return $_SERVER['REQUEST_URI'] === $value;
}
