<?php defined('BASEPATH') or exit('No direct script access allowed');

$config = array(
   'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
   'smtp_host' => 'mail.autoblueprint.net',
   'smtp_port' => 465,
   'smtp_user' => '_mainaccount@autoblueprint.net',
   'smtp_pass' => 'Shadow22!!',
   'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
   'mailtype' => 'html', //plaintext 'text' mails or 'html'
   'smtp_timeout' => '20', //in seconds
   'charset' => 'iso-8859-1',
   'wordwrap' => TRUE
);
// $config = array(
//    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
//    'smtp_host' => 'smtp.sendgrid.net',
//    'smtp_port' => 465,
//    'smtp_user' => 'AutoBluePrintSmtp',
//    'smtp_pass' => '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',
//    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
//    'mailtype' => 'html', //plaintext 'text' mails or 'html'
//    'smtp_timeout' => '30', //in seconds
//    'charset' => 'iso-8859-1',
//    'wordwrap' => TRUE
// );
