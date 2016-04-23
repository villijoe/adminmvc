<?php

require_once(ROOT . '/models/ParentModel.php');

/**
 * Created by PhpStorm.
 * User: Orion
 * Date: 16.04.2016
 * Time: 16:42
 */
class Wants extends ParentModel
{
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