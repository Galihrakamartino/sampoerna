<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class unit_model extends CI_Model {
   public function __construct()
   {
    parent::__construct();
        //Do your magic here
}

public function getAllunit()
{
    $this->db->join('machine', 'machine.id_machine = unit.id_machine', 'left');
    $query = $this->db->get('unit');
        return $query->result();
}

public function insertUnit() {

    $data = array(
        'nama_unit' => $this->input->post('namaunit'),
         'id_machine' => $this->input->post('id_machine'),
        'deskripsi_unit' => $this->input->post('deskripsiunit'));
    $this->db->insert('unit', $data);
}

public function getUnit($id)
{
    $this->db->where('id_unit', $id);
    $query = $this->db->get('unit');
    if($query->num_rows()>0){
        return $query->result();
    }
}

public function updateUnit($id)
{
    $this->db->where('id_unit', $id);
    $data = array(
        'id_unit' => $this->input->post('idunit'),
        'nama_unit' => $this->input->post('namaunit'),
         'id_machine' => $this->input->post('id_machine'),
        'deskripsi_unit' => $this->input->post('deskripsiunit'));
    $this->db->update('unit', $data);

}

public function deleteUnit($id)
    {
        $this->db->where('id_unit', $id);
        $this->db->delete('unit');
    }
}