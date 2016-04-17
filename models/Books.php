<?php

/**
 * Created by PhpStorm.
 * User: Orion
 * Date: 16.04.2016
 * Time: 16:42
 */
class News
{
    public static function getNewsList()
    {
//        $host = 'localhost';
//        $dbname = 'adminmylife';
//        $user = 'root';
//        $password = '';
//        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db = Db::getConnection();

        $newsList = array();

        $result = $db->query('SELECT * FROM books');

        $i = 0;
        while($row = $result->fetch()) {
            $newsList[$i]['id_book'] = $row['id_book'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['writer'] = $row['writer'];
            $newsList[$i]['total_pages'] = $row['total_pages'];
            $newsList[$i]['reading_pages'] = $row['reading_pages'];
            $newsList[$i]['reading'] = $row['reading'];
            $newsList[$i]['start_date'] = $row['start_date'];
            $newsList[$i]['end_date'] = $row['end_date'];
            $i++;
        }

        return $newsList;
    }

    public static function getNewsItemById($id)
    {
        $id = intval($id);

        if ($id) {
//            $host = 'localhost';
//            $dbname = 'adminmylife';
//            $user = 'root';
//            $password = '';
//            $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM books WHERE id_book=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();
            return $newsItem;
        }
    }
}