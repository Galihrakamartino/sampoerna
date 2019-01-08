<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Unit extends CI_Controller {

	function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
		}else{
			redirect('login','refresh');
		}
		$this->load->model('unit_model','UM',true);
		$this->load->model('machine_model','MM',true);
	}

	function index()
	{
		$data['unit'] = $this->UM->getAllunit();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('unit_datatable', $data);

	}

	function insert(){
		$data['unit'] = $this->UM->getAllunit();
		$data['machine'] = $this->MM->getAllmachine();

		$this->form_validation->set_rules('namaunit', 'Nama unit', 'trim|required');
		$this->form_validation->set_rules('deskripsiunit', 'Deskripsi unit', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('inserunit', $data);
		}else{
				$this->UM->insertUnit();
				redirect('unit/','refresh');
			}
	}


	function edit($id)
	{
		$this->form_validation->set_rules('namaunit', 'Nama Unit', 'trim|required');
		$this->form_validation->set_rules('deskripsiunit', 'Deskripsi unit', 'trim|required');
		$data['unit'] = $this->UM->getUnit($id);
		$data['machine'] = $this->MM->getAllmachine();
        //$this->load->view('edit_profil', $data);

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('edit_unit', $data);
		}else {
			
				$this->UM->updateUnit($id);
				redirect('unit/','refresh');		
		}

	}

	function hapus($id)
	{
		$this->form_validation->set_rules('idunit', 'id Unit', 'trim|required');
		$data['unit'] = $this->UM->getUnit($id);
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('hapus_unit', $data);
		}else {
			$this->UM->deleteUnit($id);		
			redirect('unit/','refresh');			
		}		
	}
}
