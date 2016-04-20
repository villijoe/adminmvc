<?php

require_once 'vendor/autoload.php';


/**
 * @param $string , $attr
 */
function parse_local($string, $attr)
{
    $ch = curl_init($string);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $html = curl_exec($ch);

    curl_close($ch);

    $page = phpQuery::newDocument($html);

    $title = pq('title', $page)->html();

    $price = pq($attr, $page);

    echo $title . ' - ' . $price . '<br />';

    phpQuery::unloadDocuments($page);
}

parse_local('http://biol.com.ua/rus/product/84', '.product-param tr.even td > b');
parse_local('http://biol.com.ua/rus/product/114', '.product-param tr td > b');
parse_local('http://yoyo.ua/yoyofactory/yoyofactory-prime', 'span#productPrice');
