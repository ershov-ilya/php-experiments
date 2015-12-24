<?php
 /**
 * Created by PhpStorm.
 * Author:   ershov-ilya
 * GitHub:   https://github.com/ershov-ilya/
 * About me: http://about.me/ershov.ilya (EN)
 * Website:  http://ershov.pw/ (RU)
 * Date: 24.12.2015
 * Time: 16:06
 */

// game loop
while (TRUE)
{
    fscanf(STDIN, "%d %d",
        $x,
        $y
    );
    fscanf(STDIN, "%d",
        $humanCount
    );

    print "$x $y $humanCount";
}
