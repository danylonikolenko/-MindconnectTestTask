<?php

class Task4
{
    function result()
    {
        return "-------------Task 4---------- <br> for this sql: 'SELECT a.id, a.name, b.grade
                FROM a
                LEFT JOIN b on b.id = a.id'<br> we wil get 3 rows, 1 NULL value, because we use LEFT JOIN <br>";
    }
}