<?php

$t = readline();

while($t){
    $n = readline();
    
    $a = readline();
    $arr = explode(" ",$a);
    $x = TRUE;
    $odd = 0;
    $even = 0;
    for($i = 0; $i< $n*2; $i++){
        if($arr[$i]%2 == 0)
            $even++;
        else $odd++;        
    }
    if($odd == $even)
        echo "Yes";
    else echo "No";
    echo PHP_EOL;

    $t--;
}

?>