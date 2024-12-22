<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dosenM extends CI_Model {

    public function getData(){
        $query = $this->db->get('dosen');
        return $query->result();
    }
        
    public function insert_data($data)
    {
       $this->db->insert('dosen', $data);
    }

    public function edit_data($id)
    {
        $query = $this->db->get_where('dosen', ['id' => $id]);
        return $query->row_array();
    }

    public function update($data,$id)
    {
       return $this->db->update('dosen', $data, ['id' => $id]);
    }

    public function delete($id) 
    {
        $this->db->delete('dosen', ['id' => $id]);
        redirect(base_url('dosen'));
    }

}
