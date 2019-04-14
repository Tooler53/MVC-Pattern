<?php


//FRONT CONTROLLER

//1. Общие настройки
/**
 * Отображение ошибок во время разработки. Когда сайт перейдет на прод необходимо перевести в значение 0
 */


//use components\components\Router;

use components\Router;

ini_set('display_errors', 1);
error_reporting(E_ALL);

//2. Подключение файлов системы
define('ROOT', dirname(__FILE__));

//3. Подключение автозагрузчика
require_once ROOT.'/vendor/autoload.php';

//4. Вызов Router
require_once(ROOT.'/views/parts/header.php');
require_once(ROOT.'/views/parts/content.php');
$router = new Router();
$router->run();
require_once(ROOT.'/views/parts/footer.php');