



You can pass a variable by reference to a function so the function can modify the variable. The syntax is as follows:<br>

<?php
function foo(&$var)
{
    $var++;
}

$a=5;
foo($a);
// $a is 6 here

echo ($a);
?>