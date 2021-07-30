<?php
/*Solution of Leetcode problem 29. Divide Two Integers*/
class Solution {

    /**
     * @param Integer $dividend
     * @param Integer $divisor
     * @return Integer
     */
    function divide($dividend, $divisor) {
        if($dividend >= 1<<31 && $divisor == 1)
            return (1<<31)-1;
        else if($dividend <= -(1<<31) && $divisor ==-1)
            return (1<<31)-1;
        else if($dividend >= 1<<31 && $divisor ==-1)
            return -(1<<31);
        else if($dividend <= -(1<<31) && $divisor ==1)
            return -(1<<31);
        
        $sign = ($dividend >=0) == ($divisor>=0) ? TRUE : FALSE;
        $dividend = abs($dividend);
        $divisor = abs($divisor);

        $result = 0;
        while($dividend-$divisor >= 0){
            $count = 0;
            while($dividend - ($divisor << 1 << $count) >= 0){
                $count++;
            }

            $result += 1 << $count;
            $dividend -= $divisor << $count;
        }
        return $sign?$result:-$result;
    }
}
?>