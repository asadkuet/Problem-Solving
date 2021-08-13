<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $n = count($nums);
        $arr = [];
        $max = 0;
        for($i=0; $i<$n; $i++){
            if(!isset( $arr[ $nums[$i] ]))            
                $arr[ $nums[$i] ] = 1;
            else $arr[ $nums[$i] ] += 1;
            
            if($arr[ $nums[$i] ] > $arr[ $max ]){
                $max = $nums[$i];
            }
        }
        return $max;
    }
}

//another approach
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        sort($nums);        
        return $nums[floor(count($nums)/2)];
    }
}