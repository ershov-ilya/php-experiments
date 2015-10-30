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

$raw='123456789012345678901234567890';
print "Raw data: ". ($raw).PHP_EOL;
print "Sizeof: ".strlen ($raw).PHP_EOL;

$data=gzdeflate($raw,9);

print "Type: ".gettype($data).PHP_EOL;
print "sizeof: ".strlen ($data).PHP_EOL;
print "inflate: ".gzinflate ($data).PHP_EOL;
$base64 = base64_encode($data);
print "sizeof: ".strlen ($base64).PHP_EOL;
print "base64: ".$base64.PHP_EOL;


$data=gzcompress($raw);

print "Type: ".gettype($data).PHP_EOL;
print "sizeof: ".strlen ($data).PHP_EOL;


