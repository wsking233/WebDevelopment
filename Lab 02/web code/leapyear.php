<?php

/**
 * @author William Wang 18017970
 * 
 */
    function is_leap($user_input){
        $sd_text = "The year you entered $user_input is a standard year.";
        $leap_text = "The year you entered $user_input is a leap year.";

        $leap_return = false;

        is_numeric($user_input) ? 
        ($user_input % 4 == 0 ? ($user_input % 100 == 0 ? ($user_input % 400 == 0 ? (print $leap_text).($leap_return = true): print $sd_text) 
        : (print $leap_text).($leap_return = true)): print $sd_text) 
        : print "err: invalid input";
    

        return $leap_return;
    }

    is_leap($_GET["user_input"]);
