<?php
/**
 * Created by PhpStorm.
 * User: Toole
 * Date: 10.04.2019
 * Time: 20:32
 */

class NewsController
{
    public function actionIndex()
    {
        echo 'NewsController/index';
        return true;
    }

    public  function actionView($category, $id){

        echo '<br>'.$category;
        echo '<br>'.$id;
        echo '<br>';
        echo 'Просмотр одной записи News';
        return true;
    }
}