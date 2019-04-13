<?php
/**
 * Created by PhpStorm.
 * User: Toole
 * Date: 10.04.2019
 * Time: 21:18
 */

/**
 * Class news
 */
class News
{
    /**
     * @param $id
     * @param $category
     * @return mixed
     */
    public static function getNewsById($id, $category)
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
     * @return array
     */
    public static function getNewsList()
    {
        $db = Db::getConnection();

        $newsList = array();

        $result = $db->query('select n.id,n.title,n.short_content, n.date, nc.name as category_name from news n join news_category nc on nc.id = n.category order by n.date, n.category');
        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['category'] = $row['category_name'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }

        return $newsList;
    }
}