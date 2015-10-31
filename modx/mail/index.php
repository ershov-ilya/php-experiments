<?php
 /**
 * Created by PhpStorm.
 * Author:   ershov-ilya
 * GitHub:   https://github.com/ershov-ilya/
 * About me: http://about.me/ershov.ilya (EN)
 * Website:  http://ershov.pw/ (RU)
 * Date: 30.10.2015
 * Time: 17:20
 */

header( 'Content-Type: text/plain; charset=utf-8' );
define('MODX_API_MODE', true);
require_once('../../../index.php');

//print "Ready\n";

$content=file_get_contents('index.html');

function sendEmail($email, array $options = array()) {
    /** @var modPHPMailer $mail */
    global $modx;
    print_r($options);
    $mail = $modx->getService('mail', 'mail.modPHPMailer');
    $mail->reset();
    $mail->set(modMail::MAIL_BODY, $options['content']);
    $mail->set(modMail::MAIL_FROM, $modx->getOption('mail_smtp_user'));
    $mail->set(modMail::MAIL_FROM_NAME,  $modx->getOption('site_name'));
    $mail->set(modMail::MAIL_SUBJECT, $options['subject']);
    $mail->address('to', $email);
    $mail->address('reply-to', $modx->getOption('mail_smtp_user'));
    $mail->setHTML(true);
    $response = !$mail->send()
        ? $mail->mailer->errorInfo
        : true;
    $mail->reset();
    return $response;
}

$props=array(
    'subject' =>  'Тестовое сообщение из скрипта',
    'content'    =>  $content,
);

var_dump(sendEmail('ershov.ilya@gmail.com', $props));
//print $content;
