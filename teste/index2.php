<?php

$time = microtime(1);
$num = 80000000;
$encontrou = false;
while(!$encontrou){
    $hash = md5($num);
//    echo $num." - ".$hash."<br>";
    if(substr($hash, 0,7) == "aaaaaaa" || $num>=120000000){
        break;
    }
    $num++;
}
echo $num." - ".$hash."<br>";
echo microtime(1)-$time;