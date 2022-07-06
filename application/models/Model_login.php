<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_login extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function cek_user($username,$password){
        $this->db->select('No, username, nama_karyawan');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('usertelkom')->result_array();
    }
}