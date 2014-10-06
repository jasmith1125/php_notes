<?php

// Associative array

//example:

$characters = ["Popeye", "Brutus", "Olive Oyl"];

//example of associative array starts here:

$descriptions = ['Earth' => 'mostly harmless', 'Marvin' => 'paranoid android'];
//or...
$descriptions = array('Earth' => 'mostly harmless', 'Marvin' => 'paranoid android');

//to add new element to associative array:

$descriptions['Zaphod'] = 'President of the Imperial Galactic Government';

/* Can't use an associative array element inside a double-quoted string unless wrap the element within {} */