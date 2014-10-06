/* switch statements */
//alternative to if/else control structures
/* code executes at first true value, break prevents code from going further--each block of code in switch statement must end in break */

switch($var) {
	case value1:
		do this;
		break;
	case value2:
	case value3:
		do this;
		break;
	case value4:
		do this;
		break;
	default:
		do this;
}

// works same as...

if ($var == value1) {
	do this;
} elseif ($var == value2 || $var == value3) {
	do this;
} else {
	do this;
}