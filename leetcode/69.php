<?php
class Solution {

/**
 * @param Integer $x
 * @return Integer
 */
    function mySqrt($x) {    
        $min = 1;
        $max = $x;
        $result = -1;
        //Binary search
        while ($min <= $max) {         
            // compute middle index 
            $mid = floor($min + ($max-$min) / 2); 
            
            //two sum found in first & mid
            if($mid * $mid == $x)
                $result = $mid;

            // search the left side of the $targetay 
            if ($mid * $mid > $x)
                $max = $mid -1;  
            
                // search the right side of the $targetay 
            else $min = $mid + 1; 
            
        }
        if($result >= 0) 
            return $result;
        else return $min-1;
    }
}