<?php
$t = readline();
while($t--){
    $p = readline();
    $arr = [];
    $a = 0;
    $b = 0;
    for($i = 2; $i<=$p; $i++){
        // echo $i.' => '.$p%$i.PHP_EOL;
        if(isset($arr[$p%$i])){
            $a = $arr[$p%$i];
            $b = $i;
            break;
        }
        else $arr[$p%$i] = $i;

    }
    echo "$a $b".PHP_EOL;

}
?>