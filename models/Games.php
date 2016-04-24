<?php

require_once(ROOT . '/models/ParentModel.php');

/**
 * Created by PhpStorm.
 * User: Orion
 * Date: 16.04.2016
 * Time: 16:42
 */
class Games extends ParentModel
{
    public static function getAddGame()
    {
    $db = Db::getConnection();
    $finished = isset($_POST['finished']) ? $_POST['finished'] : 0;
    $start_date = (empty($_POST['start_date'])) ? '0000-00-00' : $_POST['start_date'];
    $end_date = (empty($_POST['end_date'])) ? '0000-00-00' : $_POST['end_date'];
    $stmt = $db->prepare('INSERT INTO games(title, company, total_chapters, finished_chapters, finished, start_date, end_date) VALUES (?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$_POST['title'],
        $_POST['company'],
        $_POST['total_chapters'],
        $_POST['finished_chapters'],
        $finished,
        $start_date,
        $end_date]);
    }

    public static function getEditGame($id)
    {
        $db = Db::getConnection();
        $finished = isset($_POST['finished']) ? 1 : 0;
        $start_date = (empty($_POST['start_date'])) ? '0000-00-00' : $_POST['start_date'];
        $end_date = (empty($_POST['end_date'])) ? '0000-00-00' : $_POST['end_date'];
        $stmt = $db->prepare('UPDATE games SET title=?, company=?, total_chapters=?, finished_chapters=?, finished=?, start_date=?, end_date=? WHERE id_game = ' . $id);
        $stmt->execute([
            $_POST['title'],
            $_POST['company'],
            $_POST['total_chapters'],
            $_POST['finished_chapters'],
            $finished,
            $start_date,
            $end_date
        ]);

    }
}