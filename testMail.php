<?php

require_once "vendor/autoload.php";

$dotenv = \Dotenv\Dotenv::createImmutable(paths: __DIR__);
$dotenv->load(); // .env => $_ENV

use PHPMailer\PHPMailer\PHPMailer;

$mailer = new PHPMailer();
$mailer->isSMTP(); // Simple Mail Transfer Protocol

$mailer->Host = $_ENV['MAILTRAP_HOST'];
$mailer->SMTPAuth = true;
$mailer->Username = $_ENV['MAILTRAP_USERNAME'];
$mailer->Password = $_ENV['MAILTRAP_PASSWORD'];
$mailer->Port = $_ENV['MAILTRAP_PORT'];

$mailer->setFrom(address: 'programiranje.dany@gmail.com', name: 'Danijela');
$mailer->addAddress(address: 'test@inbox.mailtrap.io');

$mailer->isHTML();

$mailer->Subject = 'Ovo je drugi mejl';
$mailer->Body = '<h1>Hello world</h1><p>This is a test</p>';
$mailer->AltBody = 'Hello World\nThis is a test';

$path = realpath(path: 'racuni/invoice.pdf.pdf');

$response = $mailer->addAttachment($path, name: 'dany_racun.pdf');

if(!$response) {
    die("Invoice nije dodat");
}

$mailer->send();
