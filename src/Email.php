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

        //Server settings
        $this->mail->SMTPDebug = 2;                      //Enable verbose debug output
        $this->mail->isSMTP();                                            //Send using SMTP
        $this->mail->Host = 'smtp.office365.com';                     //Set the SMTP server to send through
        $this->mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $this->mail->Username = 'victor.dracxler@rwesistemas.com.br';                     //SMTP username
        $this->mail->Password = 'teste@123';                               //SMTP password
        $this->mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $this->mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        $this->mail->CharSet = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);

        $this->mail->setFrom('victor@gustavoweb.me', 'Equipe GustavoWeb');

    }

    public function sendMail(string $subject, $body, string $replyEmail, string $replyName, string $addressMail, string $adressName)
    {
        $this->mail->Subject = $subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressMail, $adressName);

        try {
            $this->mail->send();
        } catch (Exception $e) {
            echo "Erro ao enviar email: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
        echo "Email enviado!";
    }
}