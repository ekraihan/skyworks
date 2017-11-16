<?php
/**
 * EmailService.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/16/17
 */

require_once "utils/mail/mail.class.php";

class EmailService {
    static function send_email($recipient, $recipient_name, $subject, $body) {
        $mailer = new Mail();
        $mailer->sendMail($recipient, $recipient_name, $subject, $body);
    }
}