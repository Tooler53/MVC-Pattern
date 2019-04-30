<?php
/**
 * Created by PhpStorm.
 * User: Toole
 * Date: 10.04.2019
 * Time: 20:32
 */

namespace controllers;

use components\Pagination;
use models\News;

/**
 * Class NewsController
 * @package controllers
 */

class NewsController
{
    /**
     * Данный экшен возвращает все новости из бд
     * @param int $page
     * @return bool
     */
    public function actionIndex($page = 1)
    {
        $newsList = News::getNewsList($page);
        $total = News::getTotalNews();

        $pagination = new Pagination($total, $page, News::SHOW_BY_DEFAULT, '');

        if ($newsList != null) {
            require_once(ROOT . '/views/news/index.php');
        }

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
            if (empty($newsItem['error'])) {
                require_once(ROOT . '/views/news/view.php');
            } else {
                echo '<pre><b style="color: red">';
                print_r($newsItem['error']);
                echo '</b></pre>';
            }
        }
        return true;
    }
}