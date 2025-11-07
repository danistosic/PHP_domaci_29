<?php

namespace PHP_COMPOSER28\Services;

use PHPMailer\PHPMailer\PHPMailer;

class MailService
{
    public $mail;

    public function __construct()
    {
        $mailer = new PHPMailer();
        $mailer->isSMTP(); // Simple Mail Transfer Protocol

        $mailer->Host = $_ENV['MAILTRAP_HOST'];
        $mailer->SMTPAuth = true;
        $mailer->Username = $_ENV['MAILTRAP_USERNAME'];
        $mailer->Password = $_ENV['MAILTRAP_PASSWORD'];
        $mailer->Port = $_ENV['MAILTRAP_PORT'];

        $this->mail = $mailer;
    }

    public function sendMail(string $subject, string $text, bool $isHtml = false): void
    {
        $this->mail->setFrom(address: 'programiranje.dany@gmail.com', name: 'Dany');
        $this->mail->addAddress(address: 'test@inbox.mailtrap.io');

        if ($isHtml) {
            $this->mail->isHTML();
        }

        $this->mail->Subject = $subject;
        $this->mail->Body = $text;

        $this->mail->send();
    }
}

