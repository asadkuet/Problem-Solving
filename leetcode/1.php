<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        // sort($nums);
        for($i=0; $i<count($nums)-1; $i++){
            for($j=$i+1; $j<count($nums); $j++){
                if($nums[$i] + $nums[$j] == $target)
                    return [$i,$j];
            }
        }
        return "[]";
    }
}

$nums = readline();
$target = readline();
$solution = new Solution();
$result = $solution->twoSum(explode(",", substr($nums,1,-1) ), $target);
echo $result;

//01308820696 //1050
?>


