<?php

class Task7
{
    function result()
    {
         return "-------------Task 7---------- <br> 
               1 Write an SQL statement to get all customers' name, city and salesmans'
                names, which the salesman's commission is between 12% and 14%.<br> 
                SELECT customer.name, customer.city, salesman.name as salesman
                FROM `customer`
                JOIN `salesman` on `salesman`.`id` = `customer`.`salesman_id`
                WHERE `salesman`.`comission` BETWEEN 0.12 AND 0.14 <br>
                2 Write an SQL statement to get all salesmen that didn't sell anything.<br>
                SELECT * FROM `salesman`
                WHERE `salesman`.`id` not in(SELECT `customer`.`salesman_id` FROM `customer`)";
    }
}