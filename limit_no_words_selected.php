/* The "Pyramid" number of words limitation fix
 * If $numWords is out of the allowed range, make it a 
 default value */

$numWords = ($numWords > 1 && $numWords < 6) ? $numWords : 4;