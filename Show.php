<?php
require_once "Task5.php";
require_once "Task4.php";
require_once "Task3.php";
require_once "Test1.php";
require_once "Test2.php";
require_once "Task6.php";
require_once "Task7.php";


class Show
{
    function showClasses()
    {
        $task1 = new Test1();
        echo "-------------Task 1----------<br>";
        echo $task1::last_word("The quick brown fox") . "<br>";
        echo $task1::sql_date_format('15.12.2001 14:43') . "<br>";
        echo $task1::extract_string("The quick[brown fox]") . "<br>";

        $task2 = new Test2();
        echo "-------------Task 2----------<br>";
        echo $task2->is_power(16, 4) . "<br>";
        echo $task2->format_number("$4,000.15A aaa .") . "<br>";
        echo $task2->sum_digits("9123") . "<br>";

        $task3 = new Task3();
        echo $task3->result();

        $task4 = new Task4();
        echo $task4->result();

        $task5 = new Task5();
        echo $task5->result();

        $task6 = new Task6();
        echo $task6->result();

        $task7 = new Task7();
        echo $task7->result();
    }

}