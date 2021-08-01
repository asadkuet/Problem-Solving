<?php
class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function peakIndexInMountainArray($arr) {
        $min = 0; 
        $max = count($arr) - 1; 
        $limit = $max;
        //search by binary search
        while ($limit--) { //changing loop control as $arr inn't in a single sorting              
            // compute middle index 
            $mid = floor($min + ($max-$min) / 2);   

            if($arr[$mid] > $arr[$mid+1] && $arr[$mid] > $arr[$mid-1]) { 
                // element found at mid 
                return $mid; 
            } 
            else if($arr[$mid] < $arr[$mid+1] && $arr[$mid] > $arr[$mid-1]) { 
                // search the left side of the 
                $min = $mid + 1;
            }
            else { 
                // search the right side of the 
                $max = $mid - 1; 
            } 
        }
    }
}
?>