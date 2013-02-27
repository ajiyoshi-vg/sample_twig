<?php
require_once __DIR__ . "/../vendor/autoload.php";

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem(__DIR__ . "/../templates");
$twig = new Twig_Environment($loader, array('charset'=>'eucjp'));
$template = $twig->loadTemplate("index.html");

echo $template->render(array("msg" => $_GET['msg'], 'lang'=>'ฦüหÜธ์'));
