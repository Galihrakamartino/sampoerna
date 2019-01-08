<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rh extends CI_Controller {

	function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
		}else{
			redirect('login','refresh');
		}
		$this->load->model('rh_model','RM',true);
		$this->load->model('machine_model','MM',true);
	}

	function index()
	{
		$data['rh'] = $this->RM->getAllrh();
		$data['rh1'] = $this->RM->getMachineName();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('rh_datatable', $data);

	}

	function insert(){
		$data['machine'] = $this->RM->getMachineName();
		$data['rh'] = $this->RM->getAllrh();
			$this->form_validation->set_rules('rh', 'Running Hour', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('insertrh', $data);
		}else{
				$this->RM->insertrh();
				redirect('rh/','refresh');
			}
	}


	function edit($id)
	{
		$this->form_validation->set_rules('rh', 'Running Hour', 'trim|required');
		$data['rh'] = $this->RM->getrh($id);
		$data['machine'] = $this->RM->getMachineName();
		$data['machine2'] = $this->RM->getMachine($id);
		

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('editrh', $data);
		}else {
				$this->RM->updaterh($id);
				redirect('rh','refresh');		
		}

	}

	function hapus($id)
	{
		$this->form_validation->set_rules('id_runtime', 'Id Runtime', 'trim|required');
		$data['rh'] = $this->RM->getrh($id);
		$data['machine'] = $this->RM->getMachineName();
		$data['machine2'] = $this->RM->getMachine($id);
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('hapus_rh', $data);
		}else {
			$machine = $this->RM->getMachine($id);
			
			$this->RM->deleterh($machine[0]->nama_machine);		
			redirect('rh/','refresh');			
		}		
	}
}
