<?php

/**
 * Created by PhpStorm.
 * User: Orion
 * Date: 16.04.2016
 * Time: 16:42
 */
class Games
{
    public static function getGamesList()
    {
        $db = Db::getConnection();

        $gamesList = array();

        $result = $db->query('SELECT * FROM games');

        $i = 0;
        while($row = $result->fetch()) {
            $gamesList[$i]['id_game'] = $row['id_game'];
            $gamesList[$i]['title'] = $row['title'];
            $gamesList[$i]['company'] = $row['company'];
            $gamesList[$i]['total_chapters'] = $row['total_chapters'];
            $gamesList[$i]['finished_chapters'] = $row['finished_chapters'];
            $gamesList[$i]['finished'] = $row['finished'];
            $gamesList[$i]['start_date'] = $row['start_date'];
            $gamesList[$i]['end_date'] = $row['end_date'];
            $i++;
        }

        return $gamesList;
    }

    public static function getGamesItemById($id)
    {
        $id = intval($id);

        if ($id) {

            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM games WHERE id_game=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $gamesItem = $result->fetch();
            return $gamesItem;
        }
    }

    public static function getFinishedGames()
    {
        $db = Db::getConnection();

        $gamesFinishedList = array();

        $result = $db->query('SELECT * FROM games WHERE finished=TRUE');

        $i = 0;
        while($row = $result->fetch()) {
            $gamesFinishedList[$i]['id_game'] = $row['id_game'];
            $gamesFinishedList[$i]['title'] = $row['title'];
            $gamesFinishedList[$i]['company'] = $row['company'];
            $gamesFinishedList[$i]['total_chapters'] = $row['total_chapters'];
            $gamesFinishedList[$i]['finished_chapters'] = $row['finished_chapters'];
            $gamesFinishedList[$i]['finished'] = $row['finished'];
            $gamesFinishedList[$i]['start_date'] = $row['start_date'];
            $gamesFinishedList[$i]['end_date'] = $row['end_date'];
            $i++;
        }

        return $gamesFinishedList;
    }

    public static function getProcessGames()
    {
        $db = Db::getConnection();

        $gamesProcessList = array();

        $result = $db->query('SELECT * FROM games WHERE finished=FALSE');

        $i = 0;
        while($row = $result->fetch()) {
            $gamesProcessList[$i]['id_game'] = $row['id_game'];
            $gamesProcessList[$i]['title'] = $row['title'];
            $gamesProcessList[$i]['company'] = $row['company'];
            $gamesProcessList[$i]['total_chapters'] = $row['total_chapters'];
            $gamesProcessList[$i]['finished_chapters'] = $row['finished_chapters'];
            $gamesProcessList[$i]['finished'] = $row['finished'];
            $gamesProcessList[$i]['start_date'] = $row['start_date'];
            $gamesProcessList[$i]['end_date'] = $row['end_date'];
            $i++;
        }

        return $gamesProcessList;
    }
}