<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($str) {
        $s = str_split($str);
        $roman_int = [
                        "I" => 1,
                        "V" => 5,
                        "X" => 10,
                        "L" => 50,
                        "C" => 100,
                        "D" => 500,
                        "M" => 1000,
                        "IV" => 4,
                        "IX" => 9,
                        "XL" => 40,
                        "XC" => 90,
                        "CD" => 400,
                        "CM" => 900
                    ];
        $sum = 0;
        for($i=0; $i<sizeof($s); $i++){
            if($s[$i] == 'I' && isset($s[$i+1])){
                if( $s[$i+1]=='V' || $s[$i+1]=='X' ){ 
                    $sum += $roman_int[ $s[$i].$s[$i+1] ];
                    $i++;
                }
                else $sum += $roman_int[ $s[$i] ];
            }
            else if($s[$i] == 'X' && isset($s[$i+1])){
                if( $s[$i+1]=='L' || $s[$i+1]=='C' ){
                    $sum += $roman_int[ $s[$i].$s[$i+1] ];
                    $i++;
                }
                else $sum += $roman_int[ $s[$i] ];
            }
            else if($s[$i] == 'C' && isset($s[$i+1])){
                if( $s[$i+1]=='D' || $s[$i+1]=='M' ){
                    $sum += $roman_int[ $s[$i].$s[$i+1] ];
                    $i++;
                }
                else $sum += $roman_int[ $s[$i] ];
            }
            else $sum += $roman_int[ $s[$i] ];         

        }
        return $sum;
    }
}
?>