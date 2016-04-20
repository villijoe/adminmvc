<?php

include_once ROOT . '/models/Games.php';

class GamesController
{
    public function actionIndex()
    {
        $gamesList = array();
        $gamesList = Games::getGamesList();

        require_once(ROOT . '/views/games/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $gamesItem = Games::getGamesItemById($id);

            require_once(ROOT . '/views/games/game.php');


        }

        return true;
    }
}