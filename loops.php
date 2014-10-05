/* loops */

/* while loop */

while (condition) {
	//code to be executed;
}
//loop ends when the condition is no longer true

//example:
/* initialize variable--$i is used as a counter in loops. if need more than one variable, use $j and $k */
$i = 1;
while ($i <=10) {
	echo $i . '<br>';
	$i++;
}


/* do while loop -- difference is the code in this loop will be executed at least once even if the condition is not true */

do {
	//code to be executed;
} while (condition);

//example:
$i = 100;
do {
	echo $1 . '<br>';
	$i++;
} while ($i <= 10);

/* while loops can be dangerous because it's easy to create an infinite loop */


/* for loop */

for (initialize; condition; increment) {
	//code to be executed;
}

/* example: $i = 0 because arrays are counted from 0; will display below in unordered list */
//continue skips an iteration of the loop
//break stops the loop completely

$characters = ['Popeye', 'Olive Oyl', 'Wimpy', 'Brutus', 'Sweetpea'];
for ($i = 0; $ < count($characters); $i++) {
	if ($i = 3) {
		continue; //if $i=3, code below not executed, so no Brutus
	}
	echo '<li>' . $characters[$i] . '</li>';
	if ($characters[$i] == 'Wimpy') {   //so no Sweetpea
	break;
	}
}







