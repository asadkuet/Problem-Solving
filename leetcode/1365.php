<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function smallerNumbersThanCurrent($nums) {
        $n = count($nums);
        $arr = [];
        for($i = 0; $i<$n; $i++){
            if(isset($arr[ $nums[$i] ]))
                $arr[ $nums[$i] ] += 1;
            else $arr[ $nums[$i] ] = 1;
        }
        
        $carry = 0;
        $result = [];
        for($i = 0; $i<=100; $i++){
            if(isset($arr[$i])){    
                $result[$i] = $carry;
                $carry += $arr[$i];
            }
        }
        
        $ans = [];
        for($i = 0; $i<$n; $i++){
            $ans[] = $result[ $nums[$i] ];
        }
        return $ans;
    }
}