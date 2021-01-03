<?php

//TASK 1
class Test1
{
    static function last_word($sentence)
    {
        if (strlen($sentence) == 0)
            return 0;

        $split = explode(" ", $sentence);
        return $split[count($split) - 1];
    }

    static function sql_date_format($dateStr)
    {
        $timestamp = strtotime($dateStr);
        $date = date('Y-m-d H:i:s', $timestamp);
        return $date;
    }

    static function extract_string($str)
    {
        $start = strpos($str, '[');
        $end = strpos($str, ']', $start + 1);
        if (!$start || !$end)
            return "";
        $length = $end - $start;
        $result = substr($str, $start + 1, $length - 1);
        return $result;
    }
}


