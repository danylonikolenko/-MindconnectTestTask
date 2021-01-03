<?php

class Task6
{
    function result()
    {
        return "-------------Task 6---------- <br>
                The UNION operator is used to combine the result-set of two or more SELECT statements.<br>       
                Each SELECT statement in UNION must have the same number of columns<br>
                The columns must also have similar data types<br>
                The columns in each SELECT statement must also be in the same order. Example:<br>
                (SELECT a,b,c FROM t1 WHERE a=10 AND B=1)<br>
                UNION<br>
                (SELECT a,b,c FROM t2 WHERE a=11 AND B=2)<br>
                ORDER BY a LIMIT 10;<br>";
    }
}