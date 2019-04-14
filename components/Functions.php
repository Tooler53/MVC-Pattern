<?php
/**
 * Created by PhpStorm.
 * User: Toole
 * Date: 13.04.2019
 * Time: 18:56
 */

namespace components;

class Functions
{
    /**
     * Метод для укорачивания строки
     * @param $text
     * @return string
     */
    public static function shortText($text)
    {
        return mb_substr($text, 0, 100) . '...';
    }
}