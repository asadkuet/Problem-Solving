<?php
    class Solution {

        /**
         * @param String $s
         * @return Boolean
         */
        function isPalindrome($s) {
            $s = str_split($s);
            $x = 0;
            $y = count($s)-1;        
            while($x<$y){
                if(ctype_alnum($s[$x].$s[$y]) ){
                    if(strtolower($s[$x]) != strtolower($s[$y]) )
                        return false;
                    else {
                        $x++;
                        $y--;
                    }
                }
                else if(!ctype_alnum($s[$x]))
                    $x++;
                else if(!ctype_alnum($s[$y]))
                    $y--;            
            }
            return true;
        }
    }
?>