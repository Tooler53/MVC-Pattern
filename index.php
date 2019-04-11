<?php


//FRONT CONTROLLER

//1. Общие настройки
/**
 * Отображение ошибок во время разработки. Когда сайт перейдет на прод необходимо перевести в значение 0
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

//2. Подключение файлов системы

define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Router.php');
//3. Установка соединения с БД

//4. Вызов Router

$router = new Router();
$router->run();

echo 'index';