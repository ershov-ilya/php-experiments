<?php
 /**
 * Created by PhpStorm.
 * Author:   ershov-ilya
 * GitHub:   https://github.com/ershov-ilya/
 * About me: http://about.me/ershov.ilya (EN)
 * Website:  http://ershov.pw/ (RU)
 * Date: 30.10.2015
 * Time: 17:20
 */

header( 'Content-Type: text/plain; charset=utf-8' );

error_reporting(E_ERROR | E_WARNING) ;
ini_set( "display_errors" , 1 ) ;

define('MODX_API_MODE', true);
require_once('../../../index.php');

$response = $modx->runProcessor('element/chunk/get',array(
    'id' => '68'
));

if ($response->isError()) {
    return $response->getMessage();
}
$obj = $response->getObject();
var_dump($obj);
//var_dump($obj);
