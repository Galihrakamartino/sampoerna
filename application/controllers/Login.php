<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user','usr');
    }

    function index() {
        $this->load->view('login_n');
    }

    public function cekLogin()
    {
    	$this->load->library('form_validation');
    	$this->form_validation->set_rules('username', 'Username', 'trim|required');
    	$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
        
    	if ($this->form_validation->run()==FALSE) {
            // $this->cekDb($this->input->post('username'),$this->input->post('password'));
            $this->load->view('login_n');
    	}else {
            
    		redirect('home','refresh');
    	}
    }

    public function cekDb() {
        
        $username = $this->input->post('username');
        $input = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        );  
        $result = $this->usr->cekL($input);
        if($result){
        	$sess_array = array();
        	foreach ($result as $key) {
        		$sess_array = array(
        			'id_pegawai'=>$key->id_pegawai,
                    'nama_pegawai'=>$key->nama_pegawai,
                    'alamat'=>$key->alamat,
        			'username'=>$key->username,
                    'password'=>$key->password,
                    'foto'=>$key->foto,
                    'level' => $key->level
        		);
        		$this->session->set_userdata('logged_in',$sess_array);
        		return true;
        	}
        }else{
        	$this->form_validation->set_message('cekDb',"Login Gagal");
        	return false;
        }
    }

    public function logout(){
    	$this->session->unset_userdata('logged_in');
    	$this->session->sess_destroy();
    	redirect('main','refresh');
    }
}
