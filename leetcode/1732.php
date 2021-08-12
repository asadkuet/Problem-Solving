<?php
class Solution {

    /**
     * @param Integer[] $gain
     * @return Integer
     */
    function largestAltitude($gain) {
        $n = count($gain);
        $sum = 0;
        $max = 0;
        for($i=0; $i<$n; $i++){
            $sum += $gain[$i];
            if($sum>$max)
                $max = $sum;
        }        
        return $max;
    }
}