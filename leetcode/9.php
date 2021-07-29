<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $y = strrev($x);
        if($x == $y)
            return true;
        else return false;
    }
}
?>