<?php

require_once(ROOT . '/models/ParentModel.php');

/**
 * Created by PhpStorm.
 * User: Orion
 * Date: 16.04.2016
 * Time: 16:42
 */
class Deals extends ParentModel
{
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