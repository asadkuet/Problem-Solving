<?php
/*Leetcode Problem 1480 solved using Prefix Sum Algorithm*/
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $runningSum = array();
        $runningSum[0] = $nums[0];
        $length = count($nums);
        
        for($i=1; $i<$length; $i++){
            $runningSum[$i] = $runningSum[$i-1] + $nums[$i];
        }
        
        return $runningSum;
    }
}
?>