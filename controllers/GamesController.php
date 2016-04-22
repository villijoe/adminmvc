<?php

include_once ROOT . '/models/Games.php';
include_once ROOT . '/controllers/ParentController.php';

class GamesController extends ParentController
{
    /*public function actionIndex()
    {
        $gamesList = array();
        $gamesList = Games::getGamesList();

        require_once(ROOT . '/views/game/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $gamesItem = Games::getGamesItemById($id);

            require_once(ROOT . '/views/game/game.php');


        }

        return true;
    }

    public function actionFinished()
    {
        $gamesFinishedList = Games::getFinishedGames();

        require_once(ROOT . '/views/game/finished.php');

        return true;
    }

    public function actionProcess()
    {
        $gamesProcessList = Games::getProcessGames();

        require_once(ROOT . '/views/game/process.php');

        return true;
    }*/
}