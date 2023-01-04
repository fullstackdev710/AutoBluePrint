<?php defined('BASEPATH') or exit('No direct script access allowed');

$config = array(
   'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
   'smtp_host' => 'mail.autoblueprint.net',
   'smtp_port' => 465,
   'smtp_user' => '_mainaccount@autoblueprint.net',
   'smtp_pass' => 'Shadow22!!',
   'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
   'mailtype' => 'html', //plaintext 'text' mails or 'html'
   'smtp_timeout' => '4', //in seconds
   'charset' => 'iso-8859-1',
   'wordwrap' => TRUE
);
