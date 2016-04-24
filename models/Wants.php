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
        $_POST['finished'] = isset($_POST['finished']) ? $_POST['finished'] : 0;
        $_POST['link'] = empty($_POST['link']) ? 'http://127.0.0.1/adminmvc/wants/' : $_POST['link'];
        $keys = implode(', ', array_keys($_POST));
        $stmt = $db->prepare('INSERT INTO wants(' . $keys . ') VALUES (?, ?, ?, ?)');
        $stmt->execute(array_values($_POST));
    }

    public static function getEditWant($id)
    {
        $db = Db::getConnection();
        $finished = isset($_POST['finished']) ? 1 : 0;
        $link = isset($_POST['link']) ? $_POST['link'] : 'http://127.0.0.1/adminmvc/wants/';
        $stmt = $db->prepare('UPDATE wants SET title=?, company=?, price=?, finished=?, link=? WHERE id_want = ' . $id);
        $stmt->execute([
            $_POST['title'],
            $_POST['company'],
            $_POST['price'],
            $finished,
            $link
        ]);

    }
}