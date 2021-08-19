<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $n = count($nums);
        $arr = [];
        for($i=0; $i<$n; $i++){
            if(isset($arr[$nums[$i]]))
                $arr[$nums[$i]] += 1;
            else $arr[$nums[$i]] = 1;
        }
        
        $cnt = 0;
        foreach($arr as $item){
            if($item > 1)
                $cnt += $item*($item-1)/2;
        }
        
        return $cnt;
    }
}