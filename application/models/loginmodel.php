<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class loginmodel extends CI_Model{
        function check_user($username, $password){
            $this->db->select('*');
            $this->db->from('accounts');
            $this->db->where('username', $username);
            $this->db->where('password', md5($password));
            $query = $this->db->get();
            return $query;
        }
    }
?>