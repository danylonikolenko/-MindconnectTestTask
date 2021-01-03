<?php

class Test2
{
    function is_power($number, $base)
    {
        $tmp = 0;
        $i = 1;
        while ($tmp <= $number) {
            $tmp = pow($base, $i);
            $i++;
            if ($tmp > $number)
                return false;
            if ($tmp == $number)
                return true;
        }
    }

    function format_number($str)
    {
        $result = preg_replace('/[^0-9.,]/', '', $str);
        return $result;
    }

    function sum_digits($int)
    {
        if(!is_numeric($int))
            return "please give int";
        $result = 0;
        $int = strval($int);
        for ($i = 0; $i < strlen($int); $i++) {
            $result += $int[$i];
        }
        return $result;
    }
}






