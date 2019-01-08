<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model {
     public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getAlluser()
    {
        $this->db->order_by('level', 'ASC');
        $query = $this->db->get('user');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function getProfil($id)
    {
        $this->db->where('id_pegawai', $id);
        $query = $this->db->get('user');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

     public function save($data)
    {
      $this->db->insert('user', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function updateProfil($id)
    {
        $this->db->where('id_pegawai', $id);
        if ($this->input->post('passwordbaru') == '') {
            
            $data = array(
                'nama_pegawai' => $this->input->post('namapegawai'),
                'alamat' => $this->input->post('alamat'),
                'username' => $this->input->post('username'),
            );
            
        } else {
            $data = array(
                'nama_pegawai' => $this->input->post('namapegawai'),
                'alamat' => $this->input->post('alamat'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('passwordbaru'))
            );
        }
        $this->db->update('user', $data);
    }

    public function updatePegawai($id)
    {
        $this->db->where('id_pegawai', $id);
        if ($this->input->post('passwordbaru') == '') {
            
            $data = array(
                'nama_pegawai' => $this->input->post('namapegawai'),
                'alamat' => $this->input->post('alamat'),
                'username' => $this->input->post('username'),
                'level' => $this->input->post('level'),
            );
            
        } else {
            $data = array(
                'nama_pegawai' => $this->input->post('namapegawai'),
                'alamat' => $this->input->post('alamat'),
                'username' => $this->input->post('username'),
                'level' => $this->input->post('level'),
                'password' => md5($this->input->post('passwordbaru'))
            );
        }
        $this->db->update('user', $data);
    }

    public function editFoto($id)
    {
        $this->db->where('id_pegawai', $id);
        $data = array('foto' => $this->upload->data('file_name'));
        $this->db->update('user', $data);

    }

    public function cekPassword($param)
    {
        $query = $this->db->get_where('user',$param);
        if($query->num_rows()==1){
            return true;
        }else{
            return false;
        }
    }

    public function deletePegawai($id)
    {
        $this->db->where('id_pegawai', $id);
        $this->db->delete('user');
    }

    public function insertPegawai() {

        $data = array(
                'nama_pegawai' => $this->input->post('namapegawai'),
                'alamat' => $this->input->post('alamat'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'foto' => $this->upload->data('file_name'),
                'level' => $this->input->post('level'));
        $this->db->insert('user', $data);
    }
}
        
