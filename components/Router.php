<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    /**
     * Данный метод получает строку запроса из адресной строки
     * @return string
     */
    public function getUri()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'] , '/');
        }
    }

    /**
     * Данный метод считывает данные из строки запроса и проверяет с заранее заготовленным массивом маршрутов.
     * Далее если маршрут совпадает с маршрутом то параметры машрута заменяются на параметры из запроса.
     * Далее получам имя контроллера и экшена
     * Подключаем файл с контроллером на страницу
     * Запускаем отображение метода из контроллера
     */
    public function run()
    {
        $uri = $this->getUri();

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                $segments = explode('/', $internalRoute);
                
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action' . ucfirst(array_shift($segments));
                $parameters = $segments;
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                } else {
                    echo 'error! page doesn\'t exist!';
                }

                $controllerObject = new $controllerName;

                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                if ($result != null) {
                    break;
                }
            }
        }

    }
}