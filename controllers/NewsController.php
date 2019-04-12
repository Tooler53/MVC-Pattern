<?php
/**
 * Created by PhpStorm.
 * User: Toole
 * Date: 10.04.2019
 * Time: 20:32
 */

include_once ROOT . '/models/News.php';

class NewsController
{
    /**
     * Данный экшен возвращает все новости из бд
     * @return bool
     */
    public function actionIndex()
    {
        $newsList = array();

        $newsList = News::getNewsList();

        echo '<pre>';
        print_r($newsList);
        echo '</pre>';

        return true;
    }

    /**
     * Данный метод возвращает данные одной новости по id из бд
     * @param $category
     * @param $id
     * @return bool
     */
    public function actionView($category, $id)
    {
        if ($id || $category) {
            $newsItem = News::getNewsById($id, $category);

            echo '<pre>';
            print_r($newsItem);
            echo '</pre>';

            echo 'actionView';
        }
        return true;
    }
}