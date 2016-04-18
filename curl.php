<?php

require_once 'vendor/autoload.php';

/**
 * @return mixed
 */
function curl_local($string)
{
    $ch = curl_init($string);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $html = curl_exec($ch);

    curl_close($ch);
    return $html;
}

$pan = curl_local('http://biol.com.ua/rus/product/84');
$cap = curl_local('http://biol.com.ua/rus/product/114');

/**
 * @param $html
 */
function parse_local($html, $attr)
{
    $page = phpQuery::newDocument($html);

    $title = pq('title', $page)->html();

    $price = pq($attr, $page);

    echo $title . ' - ' . $price;

    phpQuery::unloadDocuments($page);
}

parse_local($pan, '.product-param tr.even td > b');
parse_local($cap, '.product-param tr td > b');
