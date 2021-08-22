<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function sumZero($n) {
        $arr = [];
        for($i=1; $i<$n; $i += 2){
            $arr[] = $i;
            $arr[] = -$i;
        }
        if($n%2 != 0)
             $arr[] = 0;
        
        return $arr;
    }
}