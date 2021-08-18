<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function checkPossibility($nums) {
        $n = count($nums);
        $cnt = 0;
        for($i=1; $i<$n; $i++){
            if($nums[$i]<$nums[$i-1]){
                if($nums[$i-2]<= $nums[$i]){
                    $nums[$i-1] = $nums[$i];
                    $cnt++;
                }else{
                    $nums[$i] = $nums[$i-1];
                    $cnt++;
                }
            }
            
        }
        return ($cnt > 1) ? FALSE : TRUE;
    }
}