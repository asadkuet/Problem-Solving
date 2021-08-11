<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate($nums) {
        $n = count($nums);
        $arr = [];
        
        for($i=0; $i<$n; $i++){
            if(!isset($arr[ $nums[$i] ]))
                $arr[ $nums[$i] ] = $nums[$i];
            else return $nums[$i];
        }
    }
}