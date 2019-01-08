<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class machine_model extends CI_Model {
   public function __construct()
   {
    parent::__construct();
        //Do your magic here
}

public function getAllmachine()
{
    $query = $this->db->get('machine');
        return $query->result();
}

public function insertMachine() {

    $data = array(
         'id_equipment' => $this->input->post('idequipment'),
        'nama_machine' => $this->input->post('namamachine'),
        'type_machine' => $this->input->post('typemachine'),
     'nama_unit' => $this->input->post('namaunit'));
    $this->db->insert('machine', $data);
}

public function getMachine($id)
{
    $this->db->where('id_equipment', $id);
    $query = $this->db->get('machine');
    if($query->num_rows()>0){
        return $query->result();
    }
}

public function updateMachine($id)
{
    $this->db->where('id_equipment', $id);
    $data = array(
        'id_equipment' => $this->input->post('idequipment'),
        'nama_machine' => $this->input->post('namamachine'),
        'type_machine' => $this->input->post('typemachine'),
     'nama_unit' => $this->input->post('namaunit'));
    $this->db->update('machine', $data);

}

public function deleteMachine($id)
    {
        $this->db->where('id_equipment', $id);
        $this->db->delete('machine');
    }
}