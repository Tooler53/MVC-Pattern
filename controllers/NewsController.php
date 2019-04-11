<?php
/**
 * Created by PhpStorm.
 * User: Toole
 * Date: 10.04.2019
 * Time: 20:32
 */

class NewsController
{
    /**
     * Данный экшен возвращает все новости из бд
     * @return bool
     */
    public function actionIndex()
    {
        echo 'NewsController/index';
        return true;
    }

    /**
     * Данный метод возвращает данные одной новости по id из бд
     * @param $category
     * @param $id
     * @return bool
     */
    public  function actionView($category, $id){

        echo '<br>'.$category;
        echo '<br>'.$id;
        echo '<br>';
        echo 'Просмотр одной записи News';
        return true;
    }
}