<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('model_login');
    }
    public function index(){
        $session = $this->session->userdata('login'); 
        if($session != 'Sudah Loggin'){
            $this->load->view('login');
        }else{
            redirect('home');
        }
    }
    public function cek_login() {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $cek = $this->model_login->cek_user($username,$password);
        if(count($cek) == 1){

            foreach ($cek as $cek) {
                $no                     = $cek['no'];
                $nama_karyawan          = $cek['nama_karyawan'];
                $user                   = $cek['username'];
                
            }
            $this->session->set_userdata(array(
                'login'           => TRUE,
                'nama_karyawan'      => $nama_karyawan,
                'username'      => $user,
                'no'             => $no
                
            ));
            if($user == '710519'){
                redirect('home/userwitel');
            }
            else{    
            redirect('home');
            }
            
        }
        else{
            $this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> Username atau Password Salah ! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('login');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('login','refresh');
    }
}