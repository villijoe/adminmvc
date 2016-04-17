<?php
/**
 * Created by PhpStorm.
 * User: Orion
 * Date: 10.04.2016
 * Time: 9:04
 */

// вывод всех ошибок
ini_set('display_errors',1);
error_reporting(E_ALL);

// подключение всех файлов
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');

// вызов Router
$router = new Router();
$router->run();