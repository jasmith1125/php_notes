<?php

/* Explicit boolean values, case insensitive, do not enclose in quotes */
//keywords
true
false

/* implicit boolean values, case insensitive */
false
null
0
0.0
'0'
('', '') //empty string
$var = array(); //empty array


/* outside of the implicit values, everything else is true; any string that's not empty is true */