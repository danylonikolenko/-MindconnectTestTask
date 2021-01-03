<?php

class Task3
{
    function  result()
    {
        $str1 = 'yabadabadoo';
        $str2 = 'yaba';

        echo "-------------Task 3----------<br>";

        if (strpos($str1, $str2)) {
            echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";

        } else {
            echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\" for strpos($str1, $str2) ";
            echo "<br>";
        }


        $str1 = 'yabadabadoo';
        $str2 = 'yaba';

        if (strpos($str1, $str2) !== false) {
            echo "\"" . $str1 . "\" contains \"" . $str2 . "\" for strpos($str1, $str2) !== false " ;
        } else {
            echo "\"" . $str1 . "\" does not contain   \"" . $str2 . "\"";
        }

        return "<br> It cant be done because fun strpos returns false, we need to add !== false, if we expect the true <br>";

    }
}


