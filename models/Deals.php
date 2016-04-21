<?php

/**
 * Created by PhpStorm.
 * User: Orion
 * Date: 16.04.2016
 * Time: 16:42
 */
class Deals
{
    public static function getDealsList()
    {
        $db = Db::getConnection();

        $dealsList = array();

        $result = $db->query('SELECT * FROM deals');

        $i = 0;
        while($row = $result->fetch()) {
            $dealsList[$i]['id_deal'] = $row['id_deal'];
            $dealsList[$i]['title'] = $row['title'];
            $dealsList[$i]['description'] = $row['description'];
            $dealsList[$i]['tasks'] = $row['tasks'];
            $dealsList[$i]['finished'] = $row['finished'];
            $dealsList[$i]['start_date'] = $row['start_date'];
            $dealsList[$i]['end_date'] = $row['end_date'];
            $i++;
        }

        return $dealsList;
    }

    public static function getDealsItemById($id)
    {
        $id = intval($id);

        if ($id) {

            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM deals WHERE id_deal=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $dealsItem = $result->fetch();
            return $dealsItem;
        }
    }

    public static function getFinishedDeals()
    {
        $db = Db::getConnection();

        $dealsFinishedList = array();

        $result = $db->query('SELECT * FROM deals WHERE finished=TRUE');

        $i = 0;
        while($row = $result->fetch()) {
            $dealsFinishedList[$i]['id_deal'] = $row['id_deal'];
            $dealsFinishedList[$i]['title'] = $row['title'];
            $dealsFinishedList[$i]['description'] = $row['description'];
            $dealsFinishedList[$i]['tasks'] = $row['tasks'];
            $dealsFinishedList[$i]['finished'] = $row['finished'];
            $dealsFinishedList[$i]['start_date'] = $row['start_date'];
            $dealsFinishedList[$i]['end_date'] = $row['end_date'];
            $i++;
        }

        return $dealsFinishedList;
    }

    public static function getProcessDeals()
    {
        $db = Db::getConnection();

        $dealsProcessList = array();

        $result = $db->query('SELECT * FROM deals WHERE finished=FALSE');

        $i = 0;
        while($row = $result->fetch()) {
            $dealsProcessList[$i]['id_deal'] = $row['id_deal'];
            $dealsProcessList[$i]['title'] = $row['title'];
            $dealsProcessList[$i]['description'] = $row['description'];
            $dealsProcessList[$i]['tasks'] = $row['tasks'];
            $dealsProcessList[$i]['finished'] = $row['finished'];
            $dealsProcessList[$i]['start_date'] = $row['start_date'];
            $dealsProcessList[$i]['end_date'] = $row['end_date'];
            $i++;
        }

        return $dealsProcessList;
    }

    public static function getAddDeal()
    {
        $db = Db::getConnection();
        $finished = isset($_POST['finished']) ? $_POST['finished'] : 0;
        $start_date = (empty($_POST['start_date'])) ? '0000-00-00' : $_POST['start_date'];
        $end_date = (empty($_POST['end_date'])) ? '0000-00-00' : $_POST['end_date'];
        $stmt = $db->prepare('INSERT INTO deals(title, description, tasks, finished, start_date, end_date) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$_POST['title'],
                        $_POST['description'],
                        $_POST['tasks'],
                        $finished,
                        $start_date,
                        $end_date]);
    }
}