<?php
class Solution {

    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer[]
     */
    function selfDividingNumbers($left, $right) {
        $result = [];
        
        for($num=$left; $num<=$right; $num++){
            $arr = str_split(strval($num));
            $hasZero = false;
            $nonDivide = false;
            foreach($arr as $i){
                if($i == 0){
                    $hasZero = true;
                    break;
                }else{
                    if($num%$i){
                        $nonDivide = true;
                        break;
                    }
                }
            }
            
            if(!$hasZero && !$nonDivide)
                $result[] = $num;
        }
        
        return $result;
    }
}