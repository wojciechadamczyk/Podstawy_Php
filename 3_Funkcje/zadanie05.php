<?php

function checkParametr($rps) {
    if ($rps == "papier" || $rps == "kamien" || $rps == "nozyce") {
        return true;
    } else {
        return false;
    }
}

function rockPaperScissors($player1, $player2) {
if (checkParametr($player1) == false){
    return "bledny parametr";
}  
if (checkParametr($player2) == false){
    return "bledny parametr";
}
if ($player1 == $player2) {
    return "remis";
}
if ($player1 == "papier") {
    if ($player2 == "kamien") {
        return "Wygral gracz 2 ";
    } else {
        return "Wygral gracz 1";
    }
    if ($player1 == "nozyce") {
        if ($player2 == "kamien") {
            return "wygral gracz 2";
        } else {
            return "wygral gracz 1";
        }
    }
        if ($player1 == "kamien") {
            if ($player2 == "papier") {
                return "wygral gracz 2";
            } else {
                return "wygral gracz 1";
            }
        }
        if ($player1 == "papier") {
            if ($player2 == "nozyce") {
                return "wygral gracz 2";
            } else {
                return "wygral gracz 1";
            }
        }
}

}
$player1 = "nozyce";
$player2 = "kamien";
echo rockPaperScissors($player1, $player2);