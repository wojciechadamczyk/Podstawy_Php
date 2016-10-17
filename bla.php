<?php

$godzina = 14;

switch ($godzina) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
    case 10:
    case 11:
        echo "8-11 - wyklady,";
    case 12:
        echo "12-13 - dyskusje,";
    case 13:
    case 14:
        echo "14 - dyskusje,";
    case 15:
    case 16:
    case 17:
    case 18:
        echo "15-18 - prelekcje,";
    case 19:
        echo "19 - kolacja,";
        break;
    default:
        echo "";
}