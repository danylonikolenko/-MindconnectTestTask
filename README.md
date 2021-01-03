# -MindconnectTestTask
Write a class named test1 that will support the following methods:
1. Static function last_word($sentence) – returns the length of the
last word of a given sentence, or 0 for empty string.
2. Static function sql_date_format($dateStr) – returns a date
formatted in sql date format.
3. Static function extract_string($str) – returns a part of a string
that is marked with square parenthesis, if exists. For example: for "The quick
[brown fox]." It will return "brown fox". For "Hello World" it will return "".

2. Write a class named test2 that will support the following methods:
1. function is_power($number,$base)– returns true if there is a number
n so that $base<n> = $number. For example is_power(16, 4) = true,
is_power(12, 2) = false
2. function format_number($str) –returns a string after removing
nonnumeric characters except comma and dot. For example: for
"$4,000.15A" it will return "4,000.15" .
3. function sum_digits($int) –returns the sum of the digits of the given
number. For example: sum_digits (9123) = 15, sum_digits(5555) = 20

3. Consider the following code:
$str1 = 'yabadabadoo';
$str2 = 'yaba';
if (strpos($str1,$str2)) {
echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}
What will be the output? Will it be as expected? If not, how can this code be fixed to work
correctly?

4. Assume we have those two tables,

Table 'a' Table 'b'
Id Name Id Grade
1 Eli 1 98
2 Moshe 3 55
3 Yossi 4 100

What will be the output of this query?
SELECT a.id, a.name, b.grade
FROM a
LEFT JOIN b on b.id = a.id
• 3 rows, 1 NULL value
• 2 rows, no NULL values
• 3 rows, 2 NULL values
• 9 rows, no NULL values

2

5. What is the difference between NOW() and CURRENT_DATE()? Give an
example for use of each of these functions.
6. What Is Union? Give an example of use
7. Assume we have those two tables:
Table salesman
Id Name city commission
5001 James Hoog New York 0.15
5002 Nail Knite Paris 0.13
5005 Pit Alex London 0.11
5006 Mc Lyon Paris 0.14
5003 Lauson Hen Berlin 0.12
5007 Paul Adam Rome 0.13

Table customer
Id Name city Salesman_id
3002 Nick Rimando New York 5001
3005 Graham Zusi California 5002
3001 Brad Guzan London 5005
3004 Fabian Johns Paris 5006
3007 Brad Davis New York 5001
3009 Geoff Camero Berlin 5003
3008 Julian Green London 5002
1. Write an SQL statement to get all customers' name, city and salesmans'
names, which the salesman's commission is between 12% and 14%.
2. Write an SQL statement to get all salesmen that didn't sell anything.
8. Assume you have an array filled with numbers, which has duplicate
values inside. Remove duplicates of an array and return an array of only
unique elements.
For example:
var arr = [1, 2, 3, 5, 1, 5, 9, 1, 2, 8];
function unique (arr){...};
unique(arr); // [1, 2, 3, 5, 9, 8]
Note: you can use either ES5 or ES6
9. Implement the following function:
function duplicate (arr, times){...};
duplicate([1, 2, 3, 4, 5],3); // [1,2,3,4,5,1,2,3,4,5,1,2,3,4,5]
Note: you can use either ES5 or ES6

3

10. The code below is for an application that requires defining a click handler
for all buttons on the page, including those buttons that may be added
later dynamically.
What is wrong with this code, and how can it be fixed to work properly
even with buttons that are added later dynamically?
// define the click handler for all buttons
$( "button" ).on( "click", function() {
console.log( "Button Clicked:",this );
});
/* ... some time later ... */
// dynamically add another button to the page
$( "html" ).append( "<button>Click Alert!</button>" );

11. Design a button in html + bootstrap 4.4 with a badge inside. Using
jQuery, each time we click on that button, the number inside the badge
will increase by 1.
Example:
