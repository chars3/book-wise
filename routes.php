<?php

$controller = "index";

// Usar REQUEST_URI para capturar o path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove o index.php, se estiver na URL
$script_name = str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']);

$path = str_replace($script_name, '', $path);

// Limpa as barras e espaços
$path = trim($path, '/');

// Se houver um path, usa como controller, senão usa 'index'
if (!empty($path)) {
  $controller = $path;
}

if (!file_exists("controllers/{$controller}.controller.php")) {
  abort(404);
}

require "controllers/{$controller}.controller.php";
