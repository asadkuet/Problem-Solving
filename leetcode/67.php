<?php
class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $a = str_split($a);
        $b = str_split($b);
        
        $na = count($a);
        $nb = count($b);
        
        $result = "";
        $carry = 0;
        
        while($na > 0 || $nb >0){
            $sum = $carry;
            if(isset($a[$na-1]))
                $sum += $a[$na-1];
            if(isset($b[$nb-1]))
                $sum += $b[$nb-1];
            
            if($sum==2){
                $carry = 1;                
                $result = '0'.$result;
            }else if($sum==3){
                $carry = 1;                
                $result = '1'.$result;
            }else{
                $carry = 0;         
                $result = $sum.$result;
            }
            $na--;
            $nb--;
        }
        if($carry)           
            $result = '1'.$result;        
        return $result;
            
    }
}