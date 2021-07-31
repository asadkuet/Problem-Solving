<?php
//Solution of Leetcode problem 167. Two SUM II with binary search in PHP
class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {    
        $result = [];
        //assume first number by iteration
        for($first = 0; $first<count($numbers); $first++){         
            $min = $first+1; 
            $max = count($numbers) - 1;    
            //search among the array elements
            while ($min <= $max) {         
                // compute middle index 
                $mid = floor($min + ($max-$min) / 2); 

                //two sum found in first & mid
                if($numbers[$first] + $numbers[$mid] == $target){
                    $result = [$first+1, $mid+1];            
                    break;
                }

                if ($target < $numbers[$first] + $numbers[$mid]) { 
                    // search the left side of the $targetay 
                    $max = $mid -1; 
                } 
                else { 
                    // search the right side of the $targetay 
                    $min = $mid + 1; 
                } 
            } 
            if(sizeof($result)>=1)
                break;
        }
        return  $result;
    }
}
?>