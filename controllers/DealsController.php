<?php

include_once ROOT . '/models/Deals.php';

class DealsController
{
    public function actionIndex()
    {
        $dealsList = array();
        $dealsList = Deals::getDealsList();

        require_once(ROOT . '/views/deals/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $dealsItem = Deals::getDealsItemById($id);

            require_once(ROOT . '/views/deals/deal.php');


        }

        return true;
    }

    public function actionFinished()
    {
        $dealsFinishedList = Deals::getFinishedDeals();

        require_once(ROOT . '/views/deals/finished.php');

        return true;
    }

    public function actionProcess()
    {
        $dealsProcessList = Deals::getProcessDeals();

        require_once(ROOT . '/views/deals/process.php');

        return true;
    }

    public function actionAdd()
    {
        if (isset($_POST['title']) && !empty($_POST['title'])) {
            Deals::getAddDeal();
            header("Location: http://127.0.0.1/adminmvc/deals/process");
        } else {
            require_once(ROOT . '/views/deals/add.php');
        }

        return true;
    }
}