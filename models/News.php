<?php
/**
 * Created by PhpStorm.
 * User: Toole
 * Date: 10.04.2019
 * Time: 21:18
 */

namespace models;

use components\Db;
use components\Functions;
use PDO;

/**
 * Class news
 */
class News
{
    const SHOW_BY_DEFAULT = 3;

    /**
     * @param int $id
     * @param string $category
     * @return array|mixed
     */
    public static function getNewsById($id = false, $category = false)
    {
        $id = intval($id);
        $category = strval($category);

        if ($id && $category) {
            $db = Db::getConnection();
            $hasCategory = $db->prepare('select * from news_category where name = :name');
            $hasCategory->bindParam(':name', $category);
            $hasCategory->execute();
            $row = $hasCategory->fetch(PDO::FETCH_ASSOC);
            if ($row != null) {
                $result = $db->prepare('select * from news where id=:id and category=:category order by date, category');
                $result->bindParam(':id', $id);
                $result->bindParam(':category', $row['id']);
                $result->execute();
                $newsItem = $result->fetch(PDO::FETCH_ASSOC);

                if ($newsItem != null) {
                    return $newsItem;
                } else {
                    return array(
                        'error' => 'Такой новости нет.'
                    );
                }
            } else {
                return array(
                    'error' => 'Такой категории нет.'
                );
            }
        }
    }

    /**
     * @param int $page
     * @return array
     */
    public static function getNewsList($page = 1)
    {
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $db = Db::getConnection();

        $newsList = array();

        $result = $db->query('select n.id, n.title, n.short_content, n.date, nc.name as category_name from news n join news_category nc on nc.id = n.category order by n.date, n.category limit ' . self::SHOW_BY_DEFAULT . ' OFFSET ' . $offset);

        $i = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = Functions::shortText($row['date']);
            $newsList[$i]['category'] = $row['category_name'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }

        return $newsList;
    }

    /**
     * Метод возвращает количество новостей в бд
     * @return mixed
     */
    public static function getTotalNews()
    {
        $db = Db::getConnection();

        $result = $db->query('select count(id) as count from news');

        $row = $result->fetch(PDO::FETCH_ASSOC);

        return $row['count'];
    }
}