<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
		}else{
			redirect('login','refresh');
		}
		$this->load->model('berita_model','BM',true);
	}

	function index()
	{
		$data['berita'] = $this->BM->getAllberita();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('berita_datatable', $data);

	}

	function insert(){
		$data['berita'] = $this->BM->getAllberita();

		$this->form_validation->set_rules('judul', 'Judul Berita', 'trim|required');
		$this->form_validation->set_rules('isi', 'Isi Berita', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal Berita', 'trim|required');
		$this->form_validation->set_rules('userfile', 'Foto', 'trim|is_null');

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('insertberita', $data);
		}else{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']  = 100000000;
			$config['max_width']  = 10240;
			$config['max_height']  = 7680;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('userfile');
				$this->BM->insertBerita();
				redirect('berita/','refresh');
			}
	}


	function edit($id)
	{
		$this->form_validation->set_rules('idberita', 'ID Berita', 'trim|required');
		$this->form_validation->set_rules('judul', 'Judul Berita', 'trim|required');
		$this->form_validation->set_rules('isi', 'Isi Berita', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal Berita', 'trim|required');
		$data['berita'] = $this->BM->getBerita($id);
        //$this->load->view('edit_profil', $data);

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('edit_berita', $data);
		}else {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']  = 100000000;
			$config['max_width']  = 10240;
			$config['max_height']  = 7680;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('userfile');
		
			
				$this->BM->updateBerita($id);
				redirect('berita/','refresh');
			
			
		}

	}

	function hapus($id)
	{
		$this->form_validation->set_rules('idberita', 'id Berita', 'trim|required');
		$data['berita'] = $this->BM->getBerita($id);
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('hapusberita', $data);
		}else {
			$this->BM->deleteBerita($id);		
			redirect('berita/','refresh');			
		}		
	}
}
