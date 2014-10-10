



mail function passes email to server's transport agent

<?php
//3 arguments
$to = 'David Powers <david@example.com>, another@example.com';
$subject = 'Subject of the email'; //single string
$body = 'This is the body of the email message.'; //must be a single string, can concatenate


//2 other arguments aren't required, but can be used
$headers = "From: webmaster@example.com\r\n"; //r is carriage return, n is new line char.
$headers .= "Content-Type: text/plain; charset = UTF-8\r\n";
$headers .= "Cc: myfriend@example.com";

//pass arguments to function
mail($to, $subject, $body, $headers, '-fdavid@example.com');//headers and -f string not required
//mail function is a boolean. To see whether successful email...
$success = mail($to, $subject, $body, $headers, '-fdavid@example.com');

//because must pass to production server's transport agent, so can't test locally