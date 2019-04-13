<?php
/**
 * Created by PhpStorm.
 * User: Toole
 * Date: 10.04.2019
 * Time: 20:32
 */

class ProductsController
{
    public function actionList()
    {
        echo 'Product/list';
        return true;
    }

    public function actionView($category, $id)
    {
        echo '<br>' . $category;
        echo '<br>' . $id;
        echo '<br>';
        echo 'Просмотр одной записи Products';
        return true;
    }
}