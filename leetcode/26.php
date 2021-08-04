<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates($nums) {
        $n = count($nums);
        if(!$n) return 0;
        $j = 0;
        for($i=1; $i<$n; $i++){
            if($nums[$i] != $nums[$j]){
                $j++;
                $nums[$j] = $nums[$i];
            }
        }
        return $j+1;
    }
}
?>