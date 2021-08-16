<?php
class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function numberOfSteps($num) {
        $step = 0;
        while($num>0){
            if($num%2 == 0){
                $num = $num/2;
                $step++;
            }else{
                $num--;
                $step++;
            }                
        }
        return $step;
    }
}