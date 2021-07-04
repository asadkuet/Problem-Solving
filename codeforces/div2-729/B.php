<?php
///TLE
$t = readline();

while($t){    
    $str = readline();
    $arr = explode(" ",$str);
    $n = $arr[0];
    $a = $arr[1];
    $b = $arr[2];

    $set = [1];
    // $set[] = 1*$a;
    // $set[] = 1+$b;
    $found = false;
    for($i = 0; $set[$i] <= $n; $i++){
        if(in_array($n, $set)){
            $found = true;
            break;
        }

        $set[] = $set[$i] * $a;
        $set[] = $set[$i] + $b;     
        sort($set);
    }
    
    if($found)
        echo "Yes";
    else echo "No";
    echo PHP_EOL;

    $t--;
}

?>