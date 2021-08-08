<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $arr = explode(" ", trim($s));
        $n = count($arr);
        $str = '';
        for($i = $n-1; $i>=0; $i--){
            if( ctype_alnum($arr[$i]) )
                $str .=  $arr[$i].' ';  
        }
        return trim($str);
    }
}
