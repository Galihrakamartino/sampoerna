<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kepegawaian extends CI_Controller {

	function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
		}else{
			redirect('login','refresh');
		}
		$this->load->model('user_model','UM',true);
	}

	function index()
	{
		$data['pegawai'] = $this->UM->getAlluser();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('pegawai_datatable', $data);

	}

	public function datatable()
	{
		$data['pegawai'] = $this->UM->getAlluser();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('pegawai_datatable', $data);
	}

	function insert(){
		$data['pegawai'] = $this->UM->getAlluser();

		$this->form_validation->set_rules('namapegawai', 'Nama Pegawai', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat Pegawai', 'trim|required');
		$this->form_validation->set_rules('username', 'username Pegawai', 'trim|required');
		$this->form_validation->set_rules('password', 'password Pegawai', 'trim|required');
		$this->form_validation->set_rules('userfile', 'Foto', 'trim|is_null');

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('insertpegawai', $data);
		}else{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']  = 100000000;
			$config['max_width']  = 10240;
			$config['max_height']  = 7680;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
				$this->upload->do_upload('userfile');
				$this->UM->insertPegawai();
				redirect('Kepegawaian/','refresh');
			
		}
	}


	function edit($id)
	{
		$this->form_validation->set_rules('idpegawai', 'id pegawai', 'trim|required');
		$this->form_validation->set_rules('namapegawai', 'Nama Pegawai', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat Pegawai', 'trim|required');
		$this->form_validation->set_rules('level', 'Level', 'trim|required');
		$this->form_validation->set_rules('passwordbaru', 'Password Baru', 'trim');
		$data['pegawai2'] = $this->UM->getProfil($id);
        //$this->load->view('edit_profil', $data);

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('edit_pegawai', $data);
		}else {
			$this->UM->updatePegawai($id);
			redirect('kepegawaian/','refresh');
		}

	}

	function hapus($id)
	{
		$this->form_validation->set_rules('idpegawai', 'id pegawai', 'trim|required');
		$data['pegawai'] = $this->UM->getProfil($id);
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('hapuspegawai', $data);
		}else {
			$this->UM->deletePegawai($id);
			if ($this->session->userdata('logged_in')['id_pegawai'] == $id) {
				redirect('login/logout','refresh');
			} else {
				redirect('kepegawaian/','refresh');	
			}
			
		}		
	}

	public function editfoto($id)
	{


		$this->form_validation->set_rules('idpegawai', 'Id Pegawai', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$data['pegawai2'] = $this->UM->getProfil($id);
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('edit_foto', $data);
		}else {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']  = 100000000;
			$config['max_width']  = 10240;
			$config['max_height']  = 7680;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload('userfile')){
				$data['error'] = $this->upload->display_errors();
				$data['pegawai2'] = $this->UM->getProfil($id);
				$this->load->view('header');
				$this->load->view('menu');
				$this->load->view('edit_foto', $data);
			}
			else{
				$this->UM->editFoto($id);
				redirect('profil/profil/'.$id,'refresh');
			}
		}


	}

	public function cekPasswordLama() {

		$password = $this->input->post('passwordlama');

		if (!empty($password)) {
			$input = array(
				'id_pegawai' => $this->input->post('idpegawai'),
				'password' => md5($password),
			);  
			$result = $this->UM->cekPassword($input);
			if($result){
				return true;
			}else{
				$this->form_validation->set_message('cekPasswordLama',"Password lama tidak sesuai");
				return false;
			}
		} else {
			return true;
		}



	}

	public function cekTerisi() {

		$passwordlama = $this->input->post('passwordlama');
		$passwordbaru = $this->input->post('passwordbaru');

		if(!empty($passwordlama)){
			if (!empty($passwordbaru)) {
				return true;
			} else {
				$this->form_validation->set_message('cekTerisi',"Isikan password baru");
				return false;
			}
		}else{
			if (!empty($passwordbaru)) {
				$this->form_validation->set_message('cekTerisi',"Harap isi password lama bila ingin mengganti password");
				return false;
			} else {
				return true;
			}
			
		}
	}    
}
