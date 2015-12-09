<?php
 /**
 * Created by PhpStorm.
 * Author:   ershov-ilya
 * GitHub:   https://github.com/ershov-ilya/
 * About me: http://about.me/ershov.ilya (EN)
 * Website:  http://ershov.pw/ (RU)
 * Date: 09.12.2015
 * Time: 10:16
 */

header( 'Content-Type: text/plain; charset=utf-8' );

// Config
$rounds=100000;
$target=2; // Percent

// Process
$hits=0;
for($i=0; $i<$rounds; $i++){
    if(mt_rand(0,100)<$target) $hits++;
}

print "Result:\n";
print "Target $target%\n";
print "Hits $hits\n";
$pos=round(($hits/$rounds)*1000)/10;
print "Possibility $pos%\n";


