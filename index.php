<?php

$controller = "index";

$path_info = $_SERVER['PATH_INFO']; // Obtém o PATH INFO da URL

if ($path_info) {
  $segments = explode('/', trim($path_info, '/'));
  var_dump($segments); // Aqui você terá um array com os segmentos da URL
} else {
  echo 'Path Info não encontrado.';
}

if ($uri = str_replace('/', '', $_SERVER['PATH_INFO'])) {
  $controller = $uri;
}

require "controllers/{$controller}.controller.php";
