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
require_once(ROOT . "/components/Db.php");

//4. Вызов Router

require_once(ROOT.'/views/parts/header.php');
require_once(ROOT.'/views/parts/content.php');
$router = new Router();
$router->run();
require_once(ROOT.'/views/parts/footer.php');