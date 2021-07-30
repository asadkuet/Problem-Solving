<?php
/* Solution of Leetcode problem 28. Implement strStr() */
class Solution {

/**
 * @param String $haystack
 * @param String $needle
 * @return Integer
 */
function strStr($haystack, $needle) {
    if($needle == '')
        return 0;
    if(strpos($haystack, $needle) !== FALSE)
        return strpos($haystack, $needle);
    else return -1;
}
}