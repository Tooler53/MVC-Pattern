<?php
/**
 * Created by PhpStorm.
 * User: Toole
 * Date: 13.04.2019
 * Time: 17:18
 */

class Db
{
    public static function getConnection()
    {
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);

        return new PDO("mysql:host={$params['host']};dbname={$params['dbname']}", $params['user'], $params['password']);
    }
}