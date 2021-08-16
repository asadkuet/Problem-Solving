<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function subtractProductAndSum($n) {
        $sum = 0;
        $product = 1;
        while($n>=1){
            $i = $n%10;
            $sum += $i;
            $product *= $i;                       
            
            $n = $n / 10;                        
        }
        return ($product - $sum);
        
    }
}