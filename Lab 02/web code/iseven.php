<?php
/**
 * @author William Wang 18017970
 * 
 */

    $is_even = "err: not given yet";

    $_GET["input_value"] % 2 == 0 ? $is_even = "even" : $is_even = "odd";

    echo "The variable has value of ".$_GET["input_value"].", and it is $is_even";
?>