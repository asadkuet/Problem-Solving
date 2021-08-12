<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minStartValue($nums) {
        $n = count($nums);
        $sum = $nums[0];
        $min = $sum;
        for($i=1; $i<$n; $i++){
            $sum += $nums[$i];
            if($sum<$min)
                $min = $sum;
        }        
        return ($min<0) ? (1-$min) : 1;
    }
}