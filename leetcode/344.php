<?php
class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $n = count($s);
        $tmp = '';
        for($i=0; $i<$n/2; $i++){
            $tmp = $s[$n-1-$i];
            $s[$n-1-$i] = $s[$i];
            $s[$i] = $tmp;
        }
        return $s;
    }
}