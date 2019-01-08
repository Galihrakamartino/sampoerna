<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class rh_model extends CI_Model {
   public function __construct()
   {
    parent::__construct();
        //Do your magic here
}

public function getAllrh()
{
    $this->db->group_by('nama_machine');
    $this->db->join('machine', 'machine.id_equipment = runtime.id_equipment', 'left');
    $query = $this->db->get('runtime');
        return $query->result();
}

public function getMachineName()
{
    $this->db->group_by('nama_machine');
    $query = $this->db->get('machine');
    return $query->result();
}


 public function getMachine($id)
 {
     $this->db->join('machine', 'machine.id_equipment = runtime.id_equipment');
     $this->db->where('id_runtime', $id);

     return $this->db->get('runtime')->result();
 }

public function insertrh() {

    date_default_timezone_set('Asia/Jakarta');
    $datetime = date("Y-m-d H:i:s");

    $nama_machine = $this->input->post('names');
    $this->db->where('nama_machine', $nama_machine);
    $query0 = $this->db->get('machine')->result();

    foreach ($query0 as $key) {
            $data = array(
                'id_equipment' => $key->id_equipment,
        'rh' => $this->input->post('rh'),
        'tanggalwaktu' => $datetime
    );        
        $this->db->insert('runtime', $data);
    }
}

public function getrh2($id)
{



    $this->db->where('nama_machine', $id);
    $query = $this->db->get('machine');
    if($query->num_rows()>0){
        return $query->result();
    }
}

public function getrh($id)
{
    $this->db->where('id_runtime', $id);
    $query = $this->db->get('runtime');
    if($query->num_rows()>0){
        return $query->result();
    }
}

public function updaterh($id)
{
   date_default_timezone_set('Asia/Jakarta');
    $datetime = date("Y-m-d H:i:s");
    $names = $this->input->post('names');
    $this->db->where('nama_machine', $names);
    $query0 = $this->db->get('machine')->result();

    foreach ($query0 as $key) {
            $data = array(
                'rh' => $this->input->post('rh'),
                'tanggalwaktu' => $datetime
            );  

        $this->db->where('id_equipment', $key->id_equipment);
        $this->db->update('runtime', $data);
    }
}

public function deleterh($names)
    {
        $this->db->where('nama_machine', $names);
        $query0 = $this->db->get('machine')->result();   
        foreach ($query0 as $key) {
            $this->db->where('id_equipment', $key->id_equipment);
            $this->db->delete('runtime');
        }
}
}
