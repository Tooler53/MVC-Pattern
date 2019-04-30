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

//3. Подключение автозагрузчика
require_once ROOT . '/vendor/autoload.php';



//4. Отрисовка сайта
$router = new components\Router();
$router->run();