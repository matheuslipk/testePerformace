<?php

$time = microtime(1);
$num = 0;
$encontrou = false;
while(!$encontrou){
    $hash = md5($num);
//    echo $num." - ".$hash."<br>";
    if(substr($hash, 0,6) == "aaaaaa" || $num>=40000000){
        break;
    }
    $num++;
}
echo $num." - ".$hash."<br>";
echo microtime(1)-$time;