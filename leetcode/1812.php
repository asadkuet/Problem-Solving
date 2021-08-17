<?php
class Solution {

    /**
     * @param String $coordinates
     * @return Boolean
     */
    function squareIsWhite($coordinates) {        
        $arr = ['a' => 1,
                'b' => 2,
                'c' => 3,
                'd' => 4,
                'e' => 5,
                'f' => 6,
                'g' => 7,
                'h' => 8,
               ];
        
        $x = $arr[$coordinates[0]];
        $y = $coordinates[1];
        
        if($x%2 == 0){
            if($y%2 != 0)
                return true;
            else return false;               
            
        }else{
            if($y%2 == 0)
                return true;
            else return false;  
        }
        
    }
}