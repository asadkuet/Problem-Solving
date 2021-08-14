<?php
class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function maximum69Number ($num) {
        $arr = str_split($num);
        $n = count($arr);
        for($i=0; $i<$n; $i++){
            if($arr[$i] == 6){
                $arr[$i] = 9;
                break;
            }
        }
        
        $result = 0;
        for($i=0; $i<$n; $i++){
            $multiplier = pow(10, ($n-$i-1) );
            $result += $multiplier * $arr[$i];
        }
        return $result;
    }
}