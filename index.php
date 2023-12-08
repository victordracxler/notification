<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;


$novoEmail = new Email;
$novoEmail->sendMail("Assunto de teste", "<p>Este é um email de <b>teste</b></p>", "victor@gustavoweb.me", "victor remetente", "victordracxler@hotmail.com", "victor destinatario");

var_dump($novoEmail);
