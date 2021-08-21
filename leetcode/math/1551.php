<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function minOperations($n) {
        if($n%2==0){
            //Summation of Series for first n/2 th odd number
            $sum = ($n/2)*($n/2);
        }else{
            //Summation of Series for first n/2 th even number
            $sum = (($n-1)/2) * ((($n-1)/2)+1);
        }
        
        return $sum;
    }
}