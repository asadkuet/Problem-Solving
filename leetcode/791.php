<?php
class Solution {

    /**
     * @param String $order
     * @param String $s
     * @return String
     */
    
    function customSortString($order, $s) {
        $order = str_split($order);
        $s = str_split($s);
        
        $order_arr = [];
        for($i=0; $i<sizeof($order); $i++)
            $order_arr[$order[$i]] = "";

        $res = "";
        for($i=0; $i<sizeof($s); $i++){
            if( isset($order_arr[ $s[$i] ]) ){
                $order_arr[ $s[$i] ] .= $s[$i];
            }else $res .= $s[$i];
        }

        $arr_all = "";
        foreach($order_arr as $key => $val)
            $arr_all .= $val;

        return $arr_all . $res;
    }
    
}
?>


