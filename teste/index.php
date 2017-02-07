<?php

$time = microtime(1);
$num = 0;
$encontrou = false;
while(!$encontrou){
    $hash = md5($num);
    echo $hash."<br>";
    if(substr($hash, 0,2) == "aa" || $num>=40000000){
        break;
    }
    $num++;
}