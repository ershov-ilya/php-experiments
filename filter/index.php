<?php
 /**
 * Created by PhpStorm.
 * Author:   ershov-ilya
 * GitHub:   https://github.com/ershov-ilya/
 * About me: http://about.me/ershov.ilya (EN)
 * Website:  http://ershov.pw/ (RU)
 * Date: 29.10.2015
 * Time: 15:09
 */

header( 'Content-Type: text/plain; charset=utf-8' );

$arr[]="-1%27%3B+UPDATE+modx_users+u+LEFT+OUTER+JOIN+modx_user_attributes+a+ON+u.id=a.internalKey+SET+email=0x4841434B454440676D61696C2E636F6D+WHERE+sudo=%271";
$arr[]="-1'; UPDATE modx_users u LEFT OUTER JOIN modx_user_attributes a ON u.id=a.internalKey SET email=0x4841434B454440676D61696C2E636F6D WHERE sudo='1";
$arr[]="-1' union select 0x3C3F7068702073797374656D28245F4745545B635D293B3F3E,'' into outfile '/home/abs/path/www/set.php";

if(isset($_REQUEST['q']) && !empty($_REQUEST['q'])){
    $arr=array(
        $_REQUEST['q']
    );
}

$filters=array(
    "FILTER_SANITIZE_EMAIL\t\t"     =>  FILTER_SANITIZE_EMAIL,
    "FILTER_SANITIZE_ENCODED\t\t"   =>  FILTER_SANITIZE_ENCODED,
    "FILTER_SANITIZE_MAGIC_QUOTES\t"  =>  FILTER_SANITIZE_MAGIC_QUOTES,
    "FILTER_SANITIZE_NUMBER_FLOAT\t"  =>  FILTER_SANITIZE_NUMBER_FLOAT,
    "FILTER_SANITIZE_NUMBER_INT\t"    =>  FILTER_SANITIZE_NUMBER_INT,
    "FILTER_SANITIZE_SPECIAL_CHARS\t" =>  FILTER_SANITIZE_SPECIAL_CHARS,
    "FILTER_SANITIZE_FULL_SPECIAL_CHARS" =>  FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    "FILTER_SANITIZE_STRING\t\t" =>  FILTER_SANITIZE_STRING,
    "FILTER_SANITIZE_STRIPPED\t" =>  FILTER_SANITIZE_STRIPPED,
    "FILTER_SANITIZE_URL\t\t" =>  FILTER_SANITIZE_URL,
    "FILTER_UNSAFE_RAW\t\t" =>  FILTER_UNSAFE_RAW // синоним FILTER_DEFAULT
);

$rating=array();
foreach($filters as $k => $v){
    $rating[$k]=10;
}

foreach($arr as $str){
    print "Raw: ".$str.PHP_EOL;
    foreach($filters as $name => $filter){
        $product=filter_var($str, $filter);
        if($product===$str) {
            $product='>>> БЕЗ ИЗМЕНЕНИЙ <<<';
            $rating[$name]--;
        }
        print $name."\t".$product.PHP_EOL;
    }
    print PHP_EOL;
}

print "Rating:\n";
foreach($rating as $name => $rate){
    print $name."\t".$rate.PHP_EOL;
}
