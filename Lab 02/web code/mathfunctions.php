<?php
/**
 * @author William Wang 18017970
 * 
 */

    function factorial($n){
        $result = 1;
        $factor = $n;
        while($factor > 1){
            $result = $result * $factor;
            $factor--;
        }

        return $result;
    }
?>