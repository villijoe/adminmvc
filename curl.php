<?php

require_once 'vendor/autoload.php';

$ch = curl_init( 'http://biol.com.ua/rus/product/84');

curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

$html = curl_exec( $ch );

curl_close( $ch );

//print_r( $html );

//$html = file_get_contents( 'http://pogoda.yandex.ru' );

phpQuery::newDocument( $html );

$title = pq( 'title' )->html();

$price = pq( '.product-param tr.even td > b' );

echo $price;

echo $title;

phpQuery::unloadDocuments();
