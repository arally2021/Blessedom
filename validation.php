<?php 
require_once "index.php";
if(isset $subscribe){
    $email $_POST ['email'];

// $from = "your-gmail-username@gmail.com";
// $to = 'recipients@example.com';
$from = "greatangelig@gmail.com";
$to = $email;
$host = "ssl://smtp.gmail.com";
$port = "465";
$username = 'your-gmail-username@gmail.com';
$password = 'your-gmail-password';

$subject = "test";
$body = "test";

$headers = array ('From' => $from, 'To' => $to,'Subject' => $subject);
$smtp = Mail::factory('smtp',
   array ('host' => $host,
     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
  echo($mail->getMessage());
} else {
  echo("Message successfully sent!\n");
}
}
?>
