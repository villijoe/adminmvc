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
        self::$id_bd = str_replace(strtolower(get_called_class()), 0, -1);
        self::$name_bd = strtolower(get_called_class());
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

            $result = $db->query('SELECT * FROM ' . self::$name_bd . ' WHERE ' . self::$id_bd . '=' . $id);

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
}