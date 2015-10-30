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

//$message = $modx->getChunk('myEmailTemplate');
$message="Test message content";
//die($message);

/** @var modX $modx */
$modx->getService('mail', 'mail.modPHPMailer');

//var_dump($modx->mail);
//die;
//$modx->mail->
$modx->mail->set(modMail::MAIL_BODY, $message);
$modx->mail->set(modMail::MAIL_FROM,'test@test.domfarfora.ru');
$modx->mail->set(modMail::MAIL_FROM_NAME,'Johnny Tester');
$modx->mail->set(modMail::MAIL_SUBJECT,'Check out my new email template!');
$modx->mail->address('to','ershov.ilya@gmail.com');
//$modx->mail->address('reply-to','noreply@effetto.pro');
$modx->mail->setHTML(true);

$res=$modx->mail->send();
var_dump($res);

if (!$modx->mail->send()) {
    $modx->log(modX::LOG_LEVEL_ERROR,'An error occurred while trying to send the email: '.$modx->mail->mailer->ErrorInfo);
}
$modx->mail->reset();
