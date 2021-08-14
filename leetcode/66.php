<?php
class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $n = count($digits);
        $carry = 1;
        $result = [];
        for($i=$n-1; $i>=0; $i--){
            if($carry){
                $sum = $digits[$i] + 1;
                if($sum>=10){
                    $sum = $sum-10;
                    $carry = 1;
                }else{
                    $carry = 0;                
                }
                $result[] = $sum;
            }else{
                $result[] = $digits[$i];
            }
        }
        if($carry)
            $result[] = $carry;
        return array_reverse($result);
    }
}