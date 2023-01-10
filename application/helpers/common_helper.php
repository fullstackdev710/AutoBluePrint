<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('getSession')) {
   function getSession($key)
   {
      $CI = &get_instance();
      if ($CI->session->has_userdata($key)) {
         return $CI->session->userdata($key);
      }

      return NULL;
   }
}

if (!function_exists('setSession')) {
   function setSession($key, $value)
   {
      $CI = &get_instance();
      $CI->session->set_userdata($key, $value);
   }
}

if (!function_exists('destroySession')) {
   function destroySession($key)
   {
      $CI = &get_instance();
      if ($CI->session->has_userdata($key)) {
         $CI->session->unset_userdata($key);
      }
   }
}

if (!function_exists('getRandomString')) {
   function getRandomString()
   {
      $length = rand(2, 10);
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
         $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
   }
}

if (!function_exists('getRandomDateTime')) {
   function getRandomDateTime($start_datetime, $end_datetime)
   {
      $min = strtotime($start_datetime);
      $max = strtotime($end_datetime);

      // Generate random number using above bounds
      $val = rand($min, $max);

      // Convert back to desired date format
      return date('Y-m-d H:i:s', $val);
   }
}
