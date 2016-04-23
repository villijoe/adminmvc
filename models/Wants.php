<?php

/**
 * Created by PhpStorm.
 * User: Orion
 * Date: 16.04.2016
 * Time: 16:42
 */
class Wants
{
    public static function getWantsList()
    {
        $db = Db::getConnection();

        $wantsList = array();

        $result = $db->query('SELECT * FROM wants');

        $i = 0;
        while($row = $result->fetch()) {
            $wantsList[$i]['id_want'] = $row['id_want'];
            $wantsList[$i]['title'] = $row['title'];
            $wantsList[$i]['company'] = $row['company'];
            $wantsList[$i]['price'] = $row['price'];
            $wantsList[$i]['finished'] = $row['finished'];
            $wantsList[$i]['link'] = $row['link'];
            $i++;
        }

        return $wantsList;
    }

    public static function getWantsItemById($id)
    {
        $id = intval($id);

        if ($id) {

            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM wants WHERE id_want=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $wantsItem = $result->fetch();
            return $wantsItem;
        }
    }

    public static function getFinishedWants()
    {
        $db = Db::getConnection();

        $wantsFinishedList = array();

        $result = $db->query('SELECT * FROM wants WHERE finished=TRUE');

        $i = 0;
        while($row = $result->fetch()) {
            $wantsFinishedList[$i]['id_want'] = $row['id_want'];
            $wantsFinishedList[$i]['title'] = $row['title'];
            $wantsFinishedList[$i]['company'] = $row['company'];
            $wantsFinishedList[$i]['price'] = $row['price'];
            $wantsFinishedList[$i]['finished'] = $row['finished'];
            $wantsFinishedList[$i]['link'] = $row['link'];
            $i++;
        }

        return $wantsFinishedList;
    }

    public static function getProcessWants()
    {
        $db = Db::getConnection();

        $wantsProcessList = array();

        $result = $db->query('SELECT * FROM wants WHERE finished=FALSE');

        $i = 0;
        while($row = $result->fetch()) {
            $wantsProcessList[$i]['id_want'] = $row['id_want'];
            $wantsProcessList[$i]['title'] = $row['title'];
            $wantsProcessList[$i]['company'] = $row['company'];
            $wantsProcessList[$i]['price'] = $row['price'];
            $wantsProcessList[$i]['finished'] = $row['finished'];
            $wantsProcessList[$i]['link'] = $row['link'];
            $i++;
        }

        return $wantsProcessList;
    }

    public static function getAddWant()
    {
        $db = Db::getConnection();
        $finished = isset($_POST['finished']) ? $_POST['finished'] : 0;
        $stmt = $db->prepare('INSERT INTO wants(title, company, price, finished, link) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$_POST['title'],
            $_POST['company'],
            $_POST['price'],
            $finished,
            $_POST['link']]);
    }
}