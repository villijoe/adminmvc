<?php

/**
 * Created by PhpStorm.
 * User: Orion
 * Date: 16.04.2016
 * Time: 16:42
 */
class Books
{
    public static function getBooksList()
    {
        $db = Db::getConnection();

        $booksList = array();

        $result = $db->query('SELECT * FROM books');

        $i = 0;
        while($row = $result->fetch()) {
//            $booksList[$i]['id_book'] = $row['id_book'];
//            $booksList[$i]['title'] = $row['title'];
//            $booksList[$i]['writer'] = $row['writer'];
//            $booksList[$i]['total_pages'] = $row['total_pages'];
//            $booksList[$i]['reading_pages'] = $row['reading_pages'];
//            $booksList[$i]['reading'] = $row['reading'];
//            $booksList[$i]['start_date'] = $row['start_date'];
//            $booksList[$i]['end_date'] = $row['end_date'];
            $booksList[$i] = $row;
            $i++;
        }

        return $booksList;
    }

    public static function getBooksItemById($id)
    {
        $id = intval($id);

        if ($id) {

            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM books WHERE id_book=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $booksItem = $result->fetch();
            return $booksItem;
        }
    }

    public static function getFinishedBooks()
    {
        $db = Db::getConnection();

        $booksFinishedList = array();

        $result = $db->query('SELECT * FROM books WHERE reading=TRUE');

        $i = 0;
        while($row = $result->fetch()) {
            $booksFinishedList[$i]['id_book'] = $row['id_book'];
            $booksFinishedList[$i]['title'] = $row['title'];
            $booksFinishedList[$i]['writer'] = $row['writer'];
            $booksFinishedList[$i]['total_pages'] = $row['total_pages'];
            $booksFinishedList[$i]['reading_pages'] = $row['reading_pages'];
            $booksFinishedList[$i]['reading'] = $row['reading'];
            $booksFinishedList[$i]['start_date'] = $row['start_date'];
            $booksFinishedList[$i]['end_date'] = $row['end_date'];
            $i++;
        }

        return $booksFinishedList;
    }

    public static function getProcessBooks()
    {
        $db = Db::getConnection();

        $booksProcessList = array();

        $result = $db->query('SELECT * FROM books WHERE reading=FALSE');

        $i = 0;
        while($row = $result->fetch()) {
            $booksProcessList[$i]['id_book'] = $row['id_book'];
            $booksProcessList[$i]['title'] = $row['title'];
            $booksProcessList[$i]['writer'] = $row['writer'];
            $booksProcessList[$i]['total_pages'] = $row['total_pages'];
            $booksProcessList[$i]['reading_pages'] = $row['reading_pages'];
            $booksProcessList[$i]['reading'] = $row['reading'];
            $booksProcessList[$i]['start_date'] = $row['start_date'];
            $booksProcessList[$i]['end_date'] = $row['end_date'];
            $i++;
        }

        return $booksProcessList;
    }
}