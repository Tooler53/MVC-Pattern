<?php
/**
 * Created by PhpStorm.
 * User: Toole
 * Date: 10.04.2019
 * Time: 21:18
 */

/**
 * Class News
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
            $host = 'localhost';
            $dbname = 'mvc_db_project';
            $user = 'root';
            $password = '';
            $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

            $result = $db->prepare('select * from news n join news_category nc on nc.id = n.category where n.id=:id and nc.name=:category order by n.date, n.category');
            $result->bindParam(':id', $id);
            $result->bindParam(':category', $category);

            $result->execute();

            $result->setFetchMode(PDO::FETCH_ASSOC);
            $newsItem = $result->fetch();

            return $newsItem;
        }
    }

    /**
     * @return array
     */
    public static function getNewsList()
    {
        $host = 'localhost';
        $dbname = 'mvc_db_project';
        $user = 'root';
        $password = '';
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

        $newsList = array();

        $result = $db->query('select * from news order by date, category');

        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['category'] = $row['category'];
            $newsList[$i]['content'] = $row['content'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }

        return $newsList;
    }
}