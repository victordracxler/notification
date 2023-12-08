<?php

require __DIR__ . '/../vendor/autoload.php';
use Notification\Email;


$novoEmail = new Email(2, "mail.gustavoweb.me", "sender@gustavoweb.com", "12345678", 'tls', '587', 'gustavo@gustavoweb.me', 'equipe gustavoweb');
$novoEmail->sendMail("Assunto de teste", "<p>Este é um email de <b>teste</b></p>", "victor@gustavoweb.me", "victor remetente", "victordracxler@hotmail.com", "victor destinatario");

var_dump($novoEmail);
