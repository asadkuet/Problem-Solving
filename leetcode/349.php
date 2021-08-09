<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($num1, $num2) {
        $x = count($num1);
        $y = count($num2);
        if($x>$y)
            $n = $x;
        else 
            $n = $y;
        
        $result = [];
        for($i=0; $i<$n; $i++){
            if(isset($num1[$i]) && !isset($result[$num1[$i]][1]))
                $result[$num1[$i]][1] = 1;
            if(isset($num2[$i]) && !isset($result[$num2[$i]][2]))
                $result[$num2[$i]][2] = 2;
        }
        
        $limit = sizeof($result);
        $ans = [];
        foreach($result as $key => $val){
           if(isset($val[1]) && isset($val[2])) 
               $ans[] = $key;            
        }
        
        return $ans;
        
    }
}