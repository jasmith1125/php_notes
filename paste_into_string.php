//paste array elements together into a string

$comma_separated = implode(",", $array);

//example from DWA15 p2
$password = implode("", $selected_words)." ".$symbol." ".$number;