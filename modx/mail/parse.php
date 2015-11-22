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
define('MODX_API_MODE', true);
require_once('../../../index.php');

//print "Ready\n";

/** @var modX $modx */
$content=$modx->runSnippet('order.parse');
print $content;
