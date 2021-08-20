<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function fib($n) {
        if($n == 0 || $n == 1)
            return $n;
        
        $fn[0] = 0;
        $fn[1] = 1;
        for($i=2; $i<=$n; $i++){
            $fn[$i] = $fn[$i-1] + $fn[$i-2];
        }
        
        return $fn[$i-1];
    }
}