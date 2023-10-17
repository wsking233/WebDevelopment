<?php
/**
 * @author William Wang 18017970
 * 
 */

    include("mathfunctions.php");

    $_GET["user_input"] >= 0 ? print"the result is: ".factorial($_GET["user_input"]): print"invalid input: number must be positive!";

?>