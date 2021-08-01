<?php
/* This solution got time limit error  */
$t = readline();
while($t--){
    $n = readline();
    $enemy = str_split(readline());
    $gregor = str_split(readline());

    $players = array_keys($gregor, 1);
    $reached = [];
    $success = 0;
    for($x = 0; $x < sizeof($players); $x++){
        $i = $players[$x];
        if($enemy[$i] == 0){ // no enemy in the same position
            $reached[$i] = $i; 
            $success++;
        }
        else{ // enemy exists in same position
            if($i-1 >=0 && $enemy[$i-1] == 1 && !isset($reached[$i-1]) ){
                $reached[$i-1] = $i;
                $success++;
            }
            else if($i+1 <= $n && $enemy[$i+1] == 1 && !isset($reached[$i+1]) ){
                $reached[$i+1] = $i;
                $success++;
            }
        }
    }
    echo $success.PHP_EOL; 

}
?>