



shuffle function to manipulate array

<?php
$colors = array('blue', 'green', 'red');
$names = array ('John', 'Jill', 'Sam');
$mixed=array_merge($colors, $names);

foreach ($mixed as $value) echo $value;
echo('<hr>');
$mixed=array_slice($mixed, 1, 4);
foreach ($mixed as $value) echo $value;
echo('<hr>');

//$rand((float)microtime()*100000);
shuffle($mixed);
foreach ($mixed as $value) echo $value;
echo('<hr>');



//for loops and shuffle
//shuffle... randomize the order of elements in an array
$myArray = range(0, 100, 10); //go from 0 to 100 in steps of 10
print_r($myArray);
echo "<br/><br/>";
shuffle($myArray);
print_r($myArray);
echo "<br><br>";


//create random name generator
$male = array('William', 'Henry', 'Filbert', 'John', 'Pat');
$last = array('Smith', 'Jones', 'Winkler', 'Cooper', 'Cline');

shuffle($male);
shuffle($last);

for ($i = 0; $i <= 3; $i++) {
	echo $male[$i] . ' ' . $last[$i];
	echo '<br/><br/>';
}