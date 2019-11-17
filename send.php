<?php
//* Mail form by Robin- https://www.youtube.com/watch?v=mDfinKIEWjY*/
$to = "chakkth@gmail.com"; /*<---add your e-mail;*/
$Subject = "Emal from website"; /*<---What subject U want to receive your e-mail;*/

//Don't touch this please//
$name = $_POST ['name'];
$email = $_POST ['email'];
$comment = $_POST ['comment'];


//this is the headers//

$headers .= "Content-type: text/html; \r\n";
$headers .= "From: $email";

//The mail function
mail($to, $Subject, $comment,$headers);
//this message will show up when U hit Submit button//
echo "Email has been sent! Thank U $name";
?>


