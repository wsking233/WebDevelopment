<?php
/**
 * @author William Wang 18017970
 * 
 */

    //days in English:

    $days[0] = "Sunday";
    $days[1] = "Monday";
    $days[2] = "Tuesday";
    $days[3] = "Wednesday";
    $days[4] = "Thursday";
    $days[5] = "Friday";
    $days[6] = "Saturday";

    echo "The Days of the week in English are: <br>";
    for ($i = 0; $i <= 5; $i++) {
        echo $days[$i];
        echo ", ";
    }
    echo $days[6].".<br><br>";

    //days in French:

    $days[0] = "Dimanche";
    $days[1] = "Lundi";
    $days[2] = "Mardi";
    $days[3] = "Mercredi";
    $days[4] = "Jeudi";
    $days[5] = "Vendredi";
    $days[6] = "Samedi";

    echo "The Days of the week in French are: <br>";
    for ($i = 0; $i <= 5; $i++) {
        echo $days[$i];
        echo ", ";
    }
    echo $days[6].".<br>";

    

   
?>