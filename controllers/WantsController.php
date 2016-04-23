<?php

include_once ROOT . '/models/Wants.php';
include_once ROOT . '/controllers/ParentController.php';

class WantsController extends ParentController
{
    /*public function actionIndex()
    {
        $wantsList = array();
        $wantsList = wants::getWantsList();

        require_once(ROOT . '/views/wants/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $wantsItem = wants::getWantsItemById($id);

            require_once(ROOT . '/views/wants/want.php');

        }

        return true;
    }

    public function actionFinished()
    {
        $wantsFinishedList = wants::getFinishedWants();

        require_once(ROOT . '/views/wants/finished.php');

        return true;
    }

    public function actionProcess()
    {
        $wantsProcessList = wants::getProcessWants();

        require_once(ROOT . '/views/wants/process.php');

        return true;
    }*/

    /*public function actionAdd()
    {
        if (isset($_POST['title']) && !empty($_POST['title'])) {
            Wants::getAddWant();
            header("Location: http://127.0.0.1/adminmvc/want/process");
        } else {
            require_once(ROOT . '/views/want/add.php');
        }

        return true;
    }*/
}