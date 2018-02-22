<?php

//mail1
//$msg = "First line of text\nSecond line of text";
//$msg = wordwrap($msg,70);
//mail("someone@example.com","My subject",$msg);


//mail2
function sendmessage($email, $username, $password) {
$to      = '{$email}';
$subject = 'the subject';
$message = 'Here is your username and password! username:{$username}, password:{$password} url:admin_login.php';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
}

?>