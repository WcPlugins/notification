<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email
{
    private $mail = \stdClass::class;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 2;
        $this->mail->isSMTP();
        $this->mail->Host = 'server3.rapidcloud.com.br';
        $this->mail->SMTPAuth = true;
        $this->mail->Username = 'sales@pluginswc.com';
        $this->mail->Password = 'Lsphgjr@2017';
        $this->mail->SMTPSecure = 'ssl';
        $this->mail->Port = 465;
        $this->mail->CharSet = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);

        //Recipients
        $this->mail->setFrom('sales@pluginswc.com', 'Plugins WC (Sales)');

    }

    public function sendMail($subject, $body, $replyEmail, $replayName, $addressEmail, $addressName)
    {

        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replyEmail, $replayName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {
            $this->mail->send();
        } catch (Exception $e) {
            echo "Mailer Error: $this->mail->ErrorInfo {$e->getMessage()}";
        }

    }

}