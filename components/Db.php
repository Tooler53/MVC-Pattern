<?php
/**
 * Created by PhpStorm.
 * User: Toole
 * Date: 13.04.2019
 * Time: 17:18
 */

namespace components;

use PDO;

class Db
{
    /**
     * Метод возвращает объект PDO
     * @return PDO
     */
    public static function getConnection()
    {
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);

        return new PDO("mysql:host={$params['host']};dbname={$params['dbname']}", $params['user'], $params['password'], array(PDO::ATTR_ERRMODE => true));
    }
}