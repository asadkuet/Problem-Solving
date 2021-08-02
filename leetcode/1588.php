<?php
class Solution{
    function prefixSum($arr, $n){
        $prefixSum = [];
        $prefixSum[0] = $arr[0];
        for($i=1; $i<$n; $i++){
           $prefixSum[$i] = $prefixSum[$i-1] + $arr[$i]; 
        }
        return $prefixSum;
    }
    
    function sumOddLengthSubarrays($arr) {
        $n = count($arr);
        $preSum = $this->prefixSum($arr, $n);
        $result = $preSum[count($preSum)-1];
        
        for($i=3; $i<=$n; $i = $i+2){ //$i is odd numbers driver
            $result += $preSum[$i-1];
            for($j=1; $j<=$n-$i; $j++){ //$j is for preSum driver
                $result += $preSum[$j+$i-1] - $preSum[$j-1];
            }   
        }
        
        return $result;
    }
}
