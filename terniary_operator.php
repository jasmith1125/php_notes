/* terniary operator */
/* assigns different values to a variable depending on whether the condition is true or false */

$var = (condition) ? value if true : value if false;

//example:
$value = 40;
$result = ($value = 42) ? 'The ansewr to the ultimate question of life, the universe and everything' : 'Keep calculating';

//answer to above would be 'Keep calculating'

//same as...
if (condition) {
	$var = 'this';
} else {
	$var = 'something else';
}