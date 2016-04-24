<?php

require_once(ROOT . '/models/ParentModel.php');

/**
 * Created by PhpStorm.
 * User: Orion
 * Date: 16.04.2016
 * Time: 16:42
 */
class Books extends ParentModel
{
    public static function getAddBook()
    {
        $db = Db::getConnection();
        $finished = isset($_POST['finished']) ? $_POST['finished'] : 0;
        $start_date = (empty($_POST['start_date'])) ? '0000-00-00' : $_POST['start_date'];
        $end_date = (empty($_POST['end_date'])) ? '0000-00-00' : $_POST['end_date'];
        $stmt = $db->prepare('INSERT INTO books(title, writer, total_pages, reading_pages, finished, start_date, end_date) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute([
            $_POST['title'],
            $_POST['writer'],
            $_POST['total_pages'],
            $_POST['reading_pages'],
            $finished,
            $start_date,
            $end_date
        ]);
    }

    public static function getEditBook($id)
    {
        $db = Db::getConnection();
        $finished = isset($_POST['finished']) ? 1 : 0;
        $start_date = (empty($_POST['start_date'])) ? '0000-00-00' : $_POST['start_date'];
        $end_date = (empty($_POST['end_date'])) ? '0000-00-00' : $_POST['end_date'];
        $stmt = $db->prepare('UPDATE books SET title=?, writer=?, total_pages=?, reading_pages=?, finished=?, start_date=?, end_date=? WHERE id_book = ' . $id);
        $stmt->execute([
            $_POST['title'],
            $_POST['writer'],
            $_POST['total_pages'],
            $_POST['reading_pages'],
            $finished,
            $start_date,
            $end_date
        ]);

    }
}