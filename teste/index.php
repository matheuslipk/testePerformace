<?php
ini_set("max_execution_time", '300');
$time = microtime(1);
$num = 0;
$encontrou = false;
while(!$encontrou){
    $hash = md5($num);
    if(substr($hash, 0,7) == "aaaaaaa" || $num>=120000000){
        break;
    }
    $num++;
}
echo $num." - ".$hash."<br>";
echo microtime(1)-$time;