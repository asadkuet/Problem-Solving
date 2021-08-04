<?php
    function removeDuplicates($nums) {
        $n = count($nums);
        $tmp = (isset($nums[0])) ? $nums[0] : null;
        for($i=1; $i<$n; $i++){
            if($nums[$i] == $tmp){
                
            }
            {
                $tmp = $nums[$i];
                $nums[$i] = $nums[$i+1];
                $nums[$i+1] = $tmp;
            }
        }
        return $nums;
    }

    $nums = [0,0,0,1,1,2,3,4,5,5,5,6]; 
    $result = removeDuplicates($nums);
    print_r($result);

?>