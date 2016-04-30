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

?>

<script>

    // write a recursive javascript function to reverse a string
    function reverse ( str ) {
        if ( str === "") {
            return "";
        } else {
            return reverse( str.substr( 1 ) ) + str.charAt( 0 );
        }
    }
    console.log( reverse( "hello son of a bitch" ) );

    // write this function, and do not use push/pop/shift/unshift: Array.prototype.reverse_self = function() {
    // _ }; Usage will be: var arr = [1,2,3,4,100,1]; arr.reverse_self(); console.log(arr); // [1,100,4,3,2,1]
    function reverse_self(array){
        var left = null;
        var right = null;
        var length = array.length;
        for (left = 0, right = length - 1; left < right; left += 1, right -= 1)
        {
            var temporary = array[left];
            array[left] = array[right];
            array[right] = temporary;
        }
        return array;
    }
    var arr = [1,2,3,4,100,1];
    console.log(reverse_self(arr));

    // what will be in a and b? function Person(){} var a = Person(); var b = new Person();
    function Person(){}
    var a = Person();
    var b = new Person();
    console.log(a);
    console.log(b);

    // write a js func that returns the sum of all its arguments
    function getAllArguments(){

    }

    const PI = 3.14;
    var a = [1,2,3,4];
    for (let i = 0; i < a.length; i++) {
        let x = a[i];
        console.log(x);
    }

</script>
