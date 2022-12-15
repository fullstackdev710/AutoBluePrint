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
