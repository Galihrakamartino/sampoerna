<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Machine extends CI_Controller {

	function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
		}else{
			redirect('login','refresh');
		}
		$this->load->model('machine_model','MM',true);
	}

	function index()
	{
		$data['machine'] = $this->MM->getAllmachine();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('machine_datatable', $data);

	}

	 public function combpk()
        {
               $this->db->where('nama_machine', $this->input->post('namamachine'));
               $this->db->where('nama_unit', $this->input->post('namaunit'));
               $result = $this->db->get('machine');
               if($result->num_rows() > 0)
               {
                  $this->form_validation->set_message('combpk','Nama unit untuk Mesin tersebut sudah ada'); // set your message
                  return false;
               }
               else{ return true;}

        }

	function insert(){
		$data['machine'] = $this->MM->getAllmachine();

			$this->form_validation->set_rules('idequipment', 'ID Equipment', 'trim|required|is_unique[machine.id_equipment]');
			$this->form_validation->set_rules('namamachine', 'Nama machine', 'trim|required');
			$this->form_validation->set_rules('typemachine', 'Type machine', 'trim|required');
			$this->form_validation->set_rules('namaunit', 'Nama Unit', 'trim|callback_combpk' );

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('insertmachine', $data);
		}else{
				$this->MM->insertMachine();
				redirect('machine/','refresh');
			}
	}


	function edit($id)
	{
			$this->form_validation->set_rules('idequipment', 'ID Equipment', 'trim|required');
			$this->form_validation->set_rules('namamachine', 'Nama machine', 'trim|required');
			$this->form_validation->set_rules('typemachine', 'Type machine', 'trim|required');
			$this->form_validation->set_rules('namaunit', 'Nama Unit', 'trim|required');
		$data['machine'] = $this->MM->getMachine($id);
		$data['machine2'] = $this->MM->getAllmachine();
        //$this->load->view('edit_profil', $data);

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('edit_machine', $data);
		}else {
			
				$this->MM->updateMachine($id);
				redirect('machine/','refresh');		
		}

	}

	function hapus($id)
	{
		$this->form_validation->set_rules('idequipment', 'id Machine', 'trim|required');
		$data['machine'] = $this->MM->getMachine($id);
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('hapus_machine', $data);
		}else {
			$this->MM->deleteMachine($id);		
			redirect('machine/','refresh');			
		}		
	}
}
