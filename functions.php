/* built-in functions */

<?php
phpversion();
$version = phpversion(); //can store as variable
//echo phpversion();

$name = 'DAVID';
echo strtolower($name) . '<br>'; //converts text to lowercase
echo $name , '<br>'; //original value remains unchanged, remains "DAVID"
/* when variable passed to function, generally variable remains unchanged; to save changed value, assign to new variable or reassign it to same variable */

/* can pass a function as an argument to another function */
$name = ucfirst(strtolower($name)); /* section in parentheses is processed then passed to ucfirst, which makes first letter cap */
echo $name.'<br>';

/* many functions take multiple arguments, some take optional arguments */

$input = '<p>Hi, <script>alert("Boo!");</script><a href="http://www.example.com/">Visit my site</a>.</p>';
echo strip_tags($input); //all tags stripped
echo strip_tags($input, '<p><a>'); /* can accept 2 arguments, 2 tags accepted*/ 

/* most functions don't change the original value of any variable passed to them as arguments, but some exceptions, including...
sort */
$characters = array('Jane', 'Joe', 'Paul', 'Ann', 'Zelda', 'Betty');
sort($characters);
foreach ($characters as $name) {
	echo "<li>$name</li>";
}
rsort($characters);  //rsort sorts in reverse alpha order
foreach ($characters as $name) {
	echo "<li>$name</li>";

}

/* if want to capture the return of a function that doesn't change original variable, capture the return as a variable */