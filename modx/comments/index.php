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

/**
 * Описание пакета
 *
 * @package modx
 * @subpackage processors.element.propertyset
 * @var modX $modx
 */



/**
 * Test function
 *
 * @param integer $id The ID of the object.
 * @param array $arr
 *
 * @return bool|array|mixed|int|null|string
 */
function test($id, $arr){

}

/**
 * Void function example
 * @return void
 */
function void(){

}
