<?php
class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function countNegatives($grid) {
        $m = count($grid);
        $n = count($grid[0]);
        $negCnt = 0;
        for($i=0; $i<$m; $i++){
            for($j=0; $j<$n; $j++){
                if($grid[$i][$j] < 0){
                    $negCnt += $n-$j;
                    break;
                }
            }
        }
        return $negCnt;
    }
}