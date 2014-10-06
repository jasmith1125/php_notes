<?php

/* logical operators */

&& /* example: $a && $b; means true only if both $a and $b are true */

|| /* means "or"; example: $a || $b; means true if either $a or $b is true */

! /* example: !$a; means true if $a is false (reverses a variables boolean value) */


/* multiple condition */

$name = 'Arthur';
$today = 'Wednesday'; /* 2nd block of code would execute */

if ($name == 'Arthur' && $today == 'Thursday') {
	echo 'I could never get the hang of Thursdays';
} elseif ($name == 'Marvin' || $today == 'Wednesday') {
	echo "I've got this terrible pain in all the diodes in my left side';
}  else {
	echo 'Is that really a piece of the fairy cake?';
}