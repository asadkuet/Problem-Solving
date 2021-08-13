<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $n = count($nums);
        $arr = [];
        for($i=0; $i<$n; $i++){
            if(!isset( $arr[ $nums[$i] ]))            
                $arr[ $nums[$i] ] = 1;
            else return true;
        }
        return false;
    }
}
?>