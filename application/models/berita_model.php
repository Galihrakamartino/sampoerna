<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class berita_model extends CI_Model {
   public function __construct()
   {
    parent::__construct();
        //Do your magic here
}

public function getAllberita()
{
    $query = $this->db->get('berita');
        return $query->result();
}

public function getberitaspesifik()
{
    $this->db->limit(4);
    $this->db->order_by('id_berita', 'desc');
    $query = $this->db->get('berita');
        return $query->result();
}

public function insertBerita() {

    $data = array(
        'judul' => $this->input->post('judul'),
        'isi_berita' => $this->input->post('isi'),
        'tanggal' => $this->input->post('tanggal'),
        'foto' => $this->upload->data('file_name'));
    $this->db->insert('berita', $data);
}

public function getBerita($id)
{
    $this->db->where('id_berita', $id);
    $query = $this->db->get('berita');
    if($query->num_rows()>0){
        return $query->result();
    }
}

public function updateBerita($id)
{
    $this->db->where('id_berita', $id);
    if ($this->upload->data('file_name') == '') {
         $data = array(
        'id_berita' => $this->input->post('idberita'),
        'judul' => $this->input->post('judul'),
        'isi_berita' => $this->input->post('isi'),
        'tanggal' => $this->input->post('tanggal'));
    }else{
    $data = array(
        'id_berita' => $this->input->post('idberita'),
        'judul' => $this->input->post('judul'),
        'isi_berita' => $this->input->post('isi'),
        'tanggal' => $this->input->post('tanggal'),
        'foto' => $this->upload->data('file_name'));
    }
    $this->db->update('berita', $data);


}

public function deleteBerita($id)
    {
        $this->db->where('id_berita', $id);
        $this->db->delete('berita');
    }

}