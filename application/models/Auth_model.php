<?php defined("BASEPATH") or exit("Direct access not permitted");

class Auth_model extends CI_Model
{
   function login_checker($username, $password)
   {
      $user = $this->db->get_where('users', array('username' => $username, 'approved' => 1))->row_array();

      if ($password != $user['password']) {
         $user = null;
      }

      if (isset($user)) {
         setSession('user_id', $user['ID']);
         setSession('username', $username);
         setSession('user_level', $user['level']);

         return $user['level'];
      }

      return FALSE;
   }
}
