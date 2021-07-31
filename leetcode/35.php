<?php
//Solution of Leetcode problem 35. Search Insert Position in PHP
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $index = -1;
        $min = 0; 
        $max = count($nums) - 1; 
        if($target <= $nums[0])      
            return 0;
        else if($target > $nums[$max])      
            return $max+1;
        
        //search among the array elements
        while ($min <= $max) {         
            // compute middle index 
            $mid = floor($min + ($max-$min) / 2); 

            // element found at mid 
            if($nums[$mid] == $target) { 
                $index = $mid; 
                break;
            } 

            if ($target < $nums[$mid]) { 
                // search the left side of the $targetay 
                $max = $mid -1; 
            } 
            else { 
                // search the right side of the $targetay 
                $min = $mid + 1; 
            } 
        }
        
        if($index >= 0) 
            return $index; 
        else return $min;
    }
}

?>