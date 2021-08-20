<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function arraySign($nums) {
        $n = count($nums);
        $sign = 1;
        for($i=0; $i<$n; $i++){
            if($nums[$i] == 0){
                $sign = 0;
                break;
            }
            
            if($nums[$i]>0)
                $sign *= 1;
            else if($nums[$i]<0)
                $sign *= -1;
            
        }
        
        return $sign;
    }
}