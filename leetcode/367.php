<?php

class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPerfectSquare($num) {
        $min = 1;
        $max = $num;
        while($min <= $max){
            $mid = floor($min + ($max-$min)/2);

            if($mid*$mid == $num)
                return TRUE;
            else if($mid*$mid < $num)
                $min = $mid+1;
            else $max = $mid-1;
        }
        return FALSE;    
    }
}