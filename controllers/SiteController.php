<?php

/**
 * Created by PhpStorm.
 * User: Orion
 * Date: 19.04.2016
 * Time: 18:11
 */
class SiteController
{
    public function actionIndex()
    {
        require_once(ROOT . '/views/site/index.php');

        return true;
    }
}