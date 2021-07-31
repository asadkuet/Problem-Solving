<?php
//Solution of Leetcode problem 167. Two SUM II with Two pointer method in PHP
class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {    
        $min = 0; 
        $max = count($numbers) - 1;    
        for($i = 0; $i<count($numbers); $i++){                   
            if($numbers[$min] + $numbers[$max] == $target){
                return [$min+1, $max+1];            
            }
            else if($numbers[$min] + $numbers[$max] > $target)
                $max--;            
            else if($numbers[$min] + $numbers[$max] < $target)
                $min++;            
        }
    }
}
?>