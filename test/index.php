<?php

require __DIR__ . '/../_libext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "your.host", "your@user.com", "your_password", "tls or ssl", "number your port", "your@email.com", "Your Name/Time");
$novoEmail->sendMail("Your Subject", "<p>Your <b>message</b> boby!</p>", "your@reply.email", "Your Reply Name", "send@email.com", "Send Name");
