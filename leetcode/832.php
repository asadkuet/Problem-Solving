<?php
class Solution {

    /**
     * @param Integer[][] $image
     * @return Integer[][]
     */
    function flipAndInvertImage($image) {
        $n = count($image);
        for($i = 0; $i<$n; $i++){
            $arr = [];
            for($j = $n-1; $j>=0; $j--){
                if($image[$i][$j] == 1)
                    $arr[] = 0;
                else $arr[] = 1;
            }
            $image[$i] = $arr;
        }
        return $image;
    }
}