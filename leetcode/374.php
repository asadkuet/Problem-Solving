<?php
/** 
 * The API guess is defined in the parent class.
 * @param  num   your guess
 * @return 	     -1 if num is lower than the guess number
 *			      1 if num is higher than the guess number
 *               otherwise return 0
 * public function guess($num){}
 */

class Solution extends GuessGame {
    /**
     * @param  Integer  $n
     * @return Integer
     */
    function guessNumber($n) {
        $min = 1;
        $max = $n;
        
        while($min <= $max){
            $pick = floor($min+($max-$min)/2);
            $result = $this->guess($pick);
            if($result == 0)
                return $pick;
            else if($result == -1){
                $max = $pick - 1;
            }
            else if($result == 1){
                $min = $pick + 1;
            }            
        }
    }
}