<?php

require_once __DIR__ ."/vendor/autoload.php";

new lib;
echo '<br>';
new Move;
echo '<br>';
connect();
echo '<br>';
new App\book();
echo '<br>';
new App\TextBook();

/* use Carbon\Carbon;

$credentials = require __DIR__."/config/config.php";

$today = Carbon::now()-> toDayDateTimeString();

$mail_transport = (new Swift_SmtpTransport($credentials['host'], $credentials['port'], $credentials['secured']))
      ->setUsername($credentials['username'])
      ->setPassword($credentials['password']);

$Mailer = new Swift_Mailer($mail_transport);     

$message = new Swift_Message(subject:'Testing SwiftMailer'. $today);
$message
->setFrom(['ante.filipovic72@gmail.com' => 'Ante Filipović'])
->setTo(['ante.filipovic72@gmail.com'])
->setBody(body:'I am using swiftmailer in my project');

$result = $Mailer->send($message); */


