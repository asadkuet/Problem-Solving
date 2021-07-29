<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $input = $x;
        if($x<0)
            $input = -1*$x;        
            
        $y = strrev($x);
        if($y > 2147483647 || $y < -2147483647)
            return 0;
        
        if($x<0)
            return -1*intval($y);
        else return intval($y);
    }
}
?>