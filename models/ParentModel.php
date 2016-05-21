<?php

/**
 * Created by PhpStorm.
 * User: Orion
 * Date: 23.04.2016
 * Time: 9:24
 */
class ParentModel
{
    protected static $name_bd;
    protected static $id_bd;

    public static function init()
    {
        self::$name_bd = strtolower(get_called_class());
        self::$id_bd = substr(self::$name_bd, 0, -1);
    }

    public static function getList()
    {
        $db = Db::getConnection();
        self::init();

        $list = array();

        $result = $db->query('SELECT * FROM ' . self::$name_bd);

        $i = 0;
        while($row = $result->fetch()) {
            $list[$i] = $row;
            $i++;
        }

        return $list;
    }

    public static function getItemById($id)
    {
        $id = intval($id);
        self::init();

        if ($id) {

            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM ' . self::$name_bd . ' WHERE id_' . self::$id_bd . '=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $item = $result->fetch();
            return $item;
        }
    }

    public static function getFinished()
    {
        $db = Db::getConnection();
        self::init();

        $list = array();

        $result = $db->query('SELECT * FROM ' . self::$name_bd . ' WHERE finished=TRUE');

        $i = 0;
        while($row = $result->fetch()) {
            $list[$i] = $row;
            $i++;
        }

        return $list;
    }

    public static function getProcess()
    {
        $db = Db::getConnection();
        self::init();

        $list = array();

        $result = $db->query('SELECT * FROM ' . self::$name_bd . ' WHERE finished=FALSE');

        $i = 0;
        while($row = $result->fetch()) {
            $list[$i] = $row;
            $i++;
        }

        return $list;
    }

    public static function getAdd()
    {
        $db = Db::getConnection();
        self::init();

        $_POST['finished'] = isset($_POST['finished']) ? 1 : 0;
        $_POST['start_date'] = (empty($_POST['start_date'])) ? '0000-00-00' : $_POST['start_date'];
        $_POST['end_date'] = (empty($_POST['end_date'])) ? '0000-00-00' : $_POST['end_date'];

        // если добавляем want то удаляем переменные даты
        if (isset($_POST['link'])) {
            unset($_POST['start_date']);
            unset($_POST['end_date']);
        }

        // если в post если переменная link и она пустая, то удалим его из массива
        if (isset($_POST['link']) && empty($_POST['link'])) {
            unset($_POST['link']);
        }

        $keys = implode(', ', array_keys($_POST));
        $count = count($_POST);
        $arr = array();
        for ($i = 0; $i < $count; $i++) {
            array_push($arr, '?');
        }
        //print_r($arr);
        $str = implode(', ', $arr);
        //echo $str;
        //echo $count;
        echo $keys;

        $stmt = $db->prepare('INSERT INTO ' . self::$name_bd . '(' . $keys . ') VALUES (' . $str . ')');
        print_r($stmt);

        print_r(array_values($_POST));
        $stmt->execute(array_values($_POST)) or die('fuck');

    }

    /*public static function getEdit($id)
    {
        $db = Db::getConnection();
        self::init();

        $_POST['finished'] = isset($_POST['finished']) ? 1 : 0;
        $_POST['start_date'] = (empty($_POST['start_date'])) ? '0000-00-00' : $_POST['start_date'];
        $_POST['end_date'] = (empty($_POST['end_date'])) ? '0000-00-00' : $_POST['end_date'];


        function add($n){
            return $n . '=?';
        }
        unset($_POST['edit']);
        $update = array_map('add', array_keys($_POST));
        $keys = implode(', ', $update);
        //print_r($keys);

        $stmt = $db->prepare('UPDATE ' . self::$name_bd . ' SET ' . $keys . ' WHERE id_' . self::$id_bd . ' = ' . $id);
        //print_r($stmt);
        print_r($_POST);
        $stmt->execute(array_values($_POST)) or die('fuck');

    }*/

    public static function getEdit($id)
    {
        $db = Db::getConnection();
        self::init();

        $stmt = $db->prepare('UPDATE ' . self::$name_bd . ' SET ' . $_POST['id_note'] . '=? WHERE id_' . self::$id_bd . ' = ' . $id);
        $stmt->execute([$_POST['val']]);

        $result = $db->query('SELECT * FROM ' . self::$name_bd . ' WHERE id_' . self::$id_bd . ' = ' . $id);
        while($row = $result->fetch()) {
            if ((($row['finish'] / $row['total']) == 1) || ($_POST['id_note']) == 'end_date') {
                $stmt = $db->prepare('UPDATE ' . self::$name_bd . ' SET finished=1, end_date=? WHERE id_' . self::$id_bd . ' = ' . $id);
                $stmt->execute([date('Y-m-d')]);
            }

            if ( ( $_POST['id_note'] == 'finish' ) && $row['start_date'] == '0000-00-00' ) {
                $stmt = $db->prepare('UPDATE ' . self::$name_bd . ' SET start_date=? WHERE id_' . self::$id_bd . ' = ' . $id);
                $stmt->execute([date('Y-m-d')]);
            }
        }
    }

    public static function getDelete($id)
    {
        $db = Db::getConnection();
        self::init();

        $stmt = $db->prepare('DELETE FROM ' . self::$name_bd . ' WHERE id_' . self::$id_bd . ' = ' . $id);
        $stmt->execute();
    }

}