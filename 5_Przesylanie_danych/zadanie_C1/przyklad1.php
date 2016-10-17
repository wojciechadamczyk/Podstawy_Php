<?php

session_start();
$arr1 = array(1, 2, 3, 4, 5);
$arr2 = array(8, 9, 0, 1, 2);
$arr3 = array(5, 9, 0, 1, 2);

//$superArr = array(
  //  'liczby' => $arr1,
   // 'znaki' => $arr2,
   // 'sumy' => $arr3
//);
$_SESSION['liczy'] = serialize($arr1);
$liczby = unserialize($_SESSION['liczby']);


$superArr['liczby'] = $arr1;
$superArr['znaki'] = $arr2;
$superArr['sumy'] = $arr3;
